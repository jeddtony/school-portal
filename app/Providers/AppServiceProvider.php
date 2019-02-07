<?php

namespace App\Providers;

use App\Studentclass;
use App\Subject;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('layouts.teacherapp', function ($view){
            $view->with('subjects', auth()->user()->subjects()->get());
            $view->with('studentclasses', Studentclass::where('user_id', auth()->user()->id)->get());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
