<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectImage;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
   public function createProject(){
       return view('Admin.Project.createProject');
   }
   public function updateProject($id){
       $project = Project::findOrFail($id);
       $projectImage = ProjectImage::where('fkProjectId',$id)->get();
       return view('Admin.Project.editProject')->with('projectUpdate',$project)->with('projectImage',$projectImage);
   }

   public function showProject(){
       $project = Project::where('active', '1')->get();
      // return $project;
        return view('Admin.Project.showProject')->with('projects',$project);
   }

   public function storeProjectData(Request $request){

       $project = new Project();
       $project->pName = $request->projectName;
       $project->slug = str_slug($request->projectName);
       $project->pLocation=$request->projectLocation;
       $project->pDescription = $request->pDescription;
       $project->bdeshDescription = $request->bdeshDescription;
       $project->pGoal = $request->pGoal;
       $project->pRaised = $request->pRaised;
       $project->serial = $request->serial;
       $project->fkuserId =Auth::id();
       if ($request->hasFile('headerImage')) {
           $file = $request->file('headerImage');
           $filename = Auth::id() . '-' . rand(1000, 9999) . '.' . $file->getClientOriginalExtension();
           $file->move('public/HeaderImage', $filename);
       }
       if ($request->hasFile('thumbnailImage')) {
           $file2 = $request->file('thumbnailImage');
           $filename2 = Auth::id() . '-' . rand(1000, 9999) . '.' . $file2->getClientOriginalExtension();
           $file2->move('public/thumbnailImage', $filename2);
       }
       $project->headerImage = $filename;
       $project->thumbnailImage = $filename2;
       $project->save();

           foreach($request->file('projectImage') as $photo) {
               $filename = Auth::id() . '-' . rand(1000, 9999) . '.' . $photo->getClientOriginalExtension();
               $photo->move('public/Gallery',$filename);
               $img = new ProjectImage();
               $img->fkprojectId = $project->projectId;
               $img->projectPath = $filename;
               $img->save();
           }
           return redirect()->route('project.show');
   }
    public function deleteProject(Request $request){
       $projectImage = ProjectImage::where('fkprojectId',$request->id)->delete();
       $project = Project::findOrFail($request->id)->delete();
//       Session::put('message',"Project Deleted Successfuly");
       return response()->json('project deleted');
    }

    public function updateProjectData(Request $request){
        $project = Project::findOrfail($request->id);
        $project->pName = $request->projectName;
        $project->pLocation=$request->projectLocation;
        $project->pDescription = $request->pDescription;
        $project->bdeshDescription = $request->bdeshDescription;
        $project->pRaised = $request->pRaised;
        $project->pGoal = $request->pGoal;
        $project->serial = $request->serial;
        $project->fkuserId =Auth::id();
        if ($request->hasFile('headerImage')) {
            $file = $request->file('headerImage');
            $filename = Auth::id() . '-' . rand(1000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move('public/HeaderImage', $filename);
            $project->headerImage = $filename;
        }

        if ($request->hasFile('thumbnailImage')) {
            $file2 = $request->file('thumbnailImage');
            $filename2 = Auth::id() . '-' . rand(1000, 9999) . '.' . $file2->getClientOriginalExtension();
            $file2->move('public/thumbnailImage', $filename2);
            $project->thumbnailImage = $filename2;
        }
//        else{
//            $project->headerImage = $project->headerImage;
//        }
//        if ($filename !=null){
//            $project->headerImage = $filename;
//        }
//        else{
//            $project->headerImage = $filename;
//        }
        $project->update();
       if ($request->hasFile('projectImage')){
           foreach($request->file('projectImage') as $photo) {
               $filename = Auth::id() . '-' . rand(1000, 9999) . '.' . $photo->getClientOriginalExtension();
               $photo->move('public/Gallery',$filename);
               $img = new ProjectImage();
               $img->fkprojectId = $project->projectId;
               $img->projectPath = $filename;
               $img->save();
           }
       }

         return redirect()->route('project.show');
        }
        public function deleteProjctImage(Request $request){
               $project = ProjectImage::findOrFail($request->id)->delete();
               return response()->json('deleted');
        }

        public function deleteProjectHeaderImage(Request $request){
               $project = Project::findOrFail($request->id);
               $project->headerImage=null;
               $project->save();
               return response()->json('deleted');
        }
        public function deleteProjectthumbnailImage(Request $request){
               $project = Project::findOrFail($request->id);
               $project->thumbnailImage=null;
               $project->save();
               return response()->json('deleted');
        }

           public static function getUserName($id){
               return User::where('userId',$id)->first()->name;
           }

           public function singlePost($slug){
               if ($slug == 'an-appeal-for-rohingya-refuges'){
                  return redirect()->route('rohingya');
               }else
                $project = Project::where('slug',$slug)->first();
                $projectImage = ProjectImage::where('fkprojectId',$project->projectId)->get();
                return view('pages.singleProject')->with('project',$project)->with('projectImage',$projectImage);
           }
           public function saveToHome(Request $request){
               $project = Project::findOrFail($request->id);
                   $project->home = $request->id1;
                   $project->save();

               return $project;
           }

           public function serveameal(){
               $slug = 'serve-a-meal';

               return $this->singlePost($slug);
           }
        }
