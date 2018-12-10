<?php

namespace App\Http\Controllers;

use App\AverageCost;
use App\RohingyaProject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RohingyaController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

            $firstproject = RohingyaProject::select('*')->orderBy('rohingyaprojectId', 'asc')->first();

           // $allproject = RohingyaProject::select(DB::raw('WHERE rohingyaprojectId NOT IN (SELECT MAX(rohingyaprojectId) FROM rohingyaproject) ORDER BY rohingyaprojectId DESC '))->get();

         //   return $allproject;

            return view('pages.rohingya' , compact('firstproject'));
        }
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
               $rProject->image = $filename;
           }

           $rProject->save();
//                  $avgCost = new AverageCost();
//           foreach ($request->avgTitle as $title){
//               foreach ($request->avgPrice as $price){
//                   $avgCost->title = $title;
//                   $avgCost->cost = $price;
//                   $avgCost->fkrohingyaprojectId = $rProject->rohingyaprojectId;
//                   $avgCost->save();
//               }
//
//           }

           for ($i=0;$i<count($request->avgTitle);$i++){
               $avgCost = new AverageCost();
               $avgCost->title =  $request->avgTitle[$i];
               $avgCost->cost =$request->avgPrice[$i];
               $avgCost->fkrohingyaprojectId = $rProject->rohingyaprojectId;
               $avgCost->save();

           }


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
                $rProject->image = $filename;
            }

            $rProject->save();
            return redirect()->route('rohingya.show');
        }



    public function delete(Request $request){
        RohingyaProject::findOrFail($request->id)->delete();
    }
}
