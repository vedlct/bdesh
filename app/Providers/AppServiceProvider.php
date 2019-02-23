<?php

namespace App\Providers;

use App\Project;
use App\RohingyaProject;
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
            $allProject = Project::get();
            $projectName = Project::select('pName','projectId','slug')->orderBy('serial','asc')->where('active', 1)->get();
            $rogingaprojectName = RohingyaProject::select('title','rohingyaprojectId')->orderBy('serial','asc')->get();
            $view->with('projectsProvider',$project)->with('allProjects',$allProject)->with('projectName',$projectName)->with('rogingaprojectname', $rogingaprojectName);
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
