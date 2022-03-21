<?php

namespace App\Providers;



use App\Theme;
use App\View\Composers\ThemeComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        View::composer('*',function ($view){
//            $view->with('themes',ThemeComposer::class);
//        });

        View::share('themes',Theme::all());
    }

}
