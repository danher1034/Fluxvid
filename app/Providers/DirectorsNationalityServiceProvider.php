<?php

namespace App\Providers;

use App\Models\Director;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class DirectorsNationalityServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $countries=Director::select('nationality')->distinct()->pluck('nationality');
        View::share('nationalitys',$countries);
    }
}
