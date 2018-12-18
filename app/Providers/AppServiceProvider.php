<?php

namespace App\Providers;

use App\Project;
use Illuminate\Support\ServiceProvider;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view)
        {
            $project = Project::where('home','1')->take(5)->orderBy('created_at','desc')->get();
            $view->with('projectsProvider',$project);
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
