<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules=[
            'plot'=> 'required|min:10|max:10000|',
            'rating'=> 'required|decimal:1|min:0|max:5',
            'director'=>'required|integer'
        ];

        switch($this->method()){
            case 'POST':
                $rules['title']='required|min:10|max:50|unique:movies';
                break;
            case 'PUT':
                $rules['title']=['required', Rule::unique('movies')->ignore($this->movie->id)];
        }
        $rules['year']='required|integer|digits:4';

        return $rules;
    }

    public function messages(): array
    {
        return [
            'title.required'=>'El título es obligatorio',
            'title.min'=>'El título debe tener al menos 10 caracteres',
            'title.max'=>'El título debe tener menos de 50 caracteres',
            'title.unique'=>'El título no puede repetirse',

            'year.required'=>'El año es obligatorio',
            'year.digits'=>'El año debe tener 4 dígitos',
            'year.integer'=>'El año no puede ser decimal',

            'plot.required'=>'El argumento es obligatorio',
            'plot.min'=>'El argumento debe tener al menos 10 caracteres',
            'plot.max'=>'El argumento debe tener menos de 10000 caracteres',

            'rating.required'=>'La valoración es obligatorio',
            'rating.min'=>'La valoración no puede ser inferior a 0',
            'rating.max'=>'La valoración no puede ser superior a 5',
            'rating.decimal'=>'La valoración debe tener un decimal solo',

            'director.required'=>'El director es obligatorio',
            'director.integer'=>'No se ha podido añadir el director'

        ];
    }
}
