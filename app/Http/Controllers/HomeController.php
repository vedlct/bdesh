<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $project = Project::where('home','1')
            ->where('active',1)
            ->orderBy('created_at','desc')
            ->take(5)
            ->get();

        $projectImage = ProjectImage::get();
        return view('home.index')->with('projectsHome',$project)->with('projectImage',$projectImage);
    }
    public static function getThumnailImage($id){
        $thumbnail = ProjectImage::where('fkprojectId',$id)->first()->projectPath;
        return $thumbnail;
    }
}
