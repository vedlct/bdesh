<?php

namespace App\Http\Controllers;

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

        return view('home.index');
    }
    public static function getThumnailImage($id){
        $thumbnail = ProjectImage::where('fkprojectId',$id)->first()->projectPath;
        return $thumbnail;
    }
}
