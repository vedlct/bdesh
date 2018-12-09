<?php

namespace App\Providers;

use App\Project;
use Illuminate\Support\ServiceProvider;
use View;
class ProjectProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View()->composer('*', function($view)
        {
            $project = Project::get();
            $view->with('prsad',$project);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
