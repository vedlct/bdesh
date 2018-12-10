<?php

namespace App\Http\Controllers;

use App\RohingyaProject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RohingyaController extends Controller
{
    public function show(){
        $rohingya = RohingyaProject::get();
        return view('Admin.RohingyaProject.showProject')->with('projects',$rohingya);
    }
}
