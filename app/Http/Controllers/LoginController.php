<?php

use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{

public function signupForm()
    {
    return view('auth.signup');
    }

public function signup (SignupRequest $request)

{

$user = new User();

$user->username = $request->get('username');

$user->name = $request->get('name');

$user->email = $request->get('email');

$user->password = Hash:: make($request->get('password'));

$user->save();

Auth:: Login($user);

return redirect()-route('users.account');

}



}
