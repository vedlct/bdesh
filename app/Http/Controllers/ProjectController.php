<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
   public function createProject(){
       return view('Admin.Project.createProject');
   }
   public function storeProjectData(Request $request){
       return $request;
   }
}
