<?php

namespace App\Http\Controllers;

use App\RohingyaProject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RohingyaController extends Controller
{
    public function show(){
        $rohingya = RohingyaProject::get();
        return view('Admin.RohingyaProject.showProject')->with('projects',$rohingya);
    }
    public function create(){
        return view('Admin.RohingyaProject.createProject');
    }
    public function edit($id){
        $rProject = RohingyaProject::findOrFail($id);
        return view('Admin.RohingyaProject.editProject')->with('project',$rProject);
    }
    public function saveData(Request $request){
       $rProject = new RohingyaProject();
       $rProject->title = $request->projectName;
       $rProject->details = $request->details;
       $rProject->video = $request->videoUrl;

           if ($request->hasFile('rImage')) {
               $file = $request->file('rImage');
               $filename = Auth::id() . '-' . rand(1000, 9999) . '.' . $file->getClientOriginalExtension();
               $file->move('public/Rohingya', $filename);
           }
           $rProject->image = $filename;
           $rProject->save();
           return redirect()->route('rohingya.show');
    }

    public function updateData(Request $request){
            $rProject = RohingyaProject::findOrFail($request->id);
            $rProject->title = $request->projectName;
            $rProject->details = $request->details;
            $rProject->video = $request->videoUrl;

            if ($request->hasFile('rImage')) {
                $file = $request->file('rImage');
                $filename = Auth::id() . '-' . rand(1000, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move('public/Rohingya', $filename);
            }
            $rProject->image = $filename;
            $rProject->save();
            return redirect()->route('rohingya.show');
        }



    public function delete(Request $request){
        RohingyaProject::findOrFail($request->id)->delete();
    }
}
