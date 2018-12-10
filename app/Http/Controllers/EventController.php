<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function createEvent(){
        return view('Admin.event.createEvent');
    }
    public function updateEvent($id){
        $event = Event::findOrFail($id);
        return view('Admin.Event.editEvent')->with('event',$event);
    }

    public function showEvents(){
        $event= Event::get();
        return view('Admin.Event.showEvent')->with('events',$event);
    }

    public function storeEvent(Request $request){
            $event = new Event();
            $event->eventName =  $request->eventName;
            $event->eLocation =  $request->eLocation;
            $event->startDate =  $request->startDate;
            $event->startTime =  $request->startTime;
            $event->EndTime =   $request->endTime;
            $event->EndDate=    Carbon::parse($request->EndDate)->format('Y-m-d');
            $event->place =    $request->place;
            $event->specialGuest=$request->specialGuest;
            $event->ticketPrice =   $request->ticketPrice;
            $event->contact =   $request->contact;

        if ($request->hasFile('eventImage')) {
            $file = $request->file('eventImage');
            $filename = Auth::id() . '-' . rand(1000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move('public/Event', $filename);
            $event->eventImage = $filename;
        }

        if ($request->hasFile('headerImage')) {
            $file = $request->file('headerImage');
            $filename = Auth::id() . '-' . rand(1000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move('public/Event/Header', $filename);
            $event->headerImage = $filename;
        }


        $event->save();
        return redirect()->route('event.show');
    }
    public function deleteEvent(Request $request){
        $event = Event::findOrFail($request->id)->delete();
//        if (file_exists($event->eventImage)) {
//            unlink($event->eventImage);
//        }
//       Session::put('message',"Project Deleted Successfuly");
        return response()->json('project deleted');
    }

    public function updateEventData(Request $request){
        $event = Event::findOrFail($request->id);
        $event->eventName =  $request->eventName;
        $event->eLocation =  $request->eLocation;
        $event->startDate =  $request->startDate;
        $event->startTime =  $request->startTime;
        $event->EndTime =   $request->endTime;
        $event->EndDate=  Carbon::parse($request->EndDate)->format('Y-m-d');
        $event->place =    $request->place;
        $event->specialGuest=$request->specialGuest;
        $event->ticketPrice =   $request->ticketPrice;
        $event->contact =   $request->contact;
        if ($request->hasFile('eventImage')) {
            $file = $request->file('eventImage');
            $filename = Auth::id() . '-' . rand(1000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move('public/Event', $filename);
            $event->eventImage = $filename;
        }

        if ($request->hasFile('headerImage')) {
            $file = $request->file('headerImage');
            $filename = Auth::id() . '-' . rand(1000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move('public/Event/Header', $filename);
            $event->headerImage = $filename;
        }
        $event->update();
        return redirect()->route('event.show');
    }
    public function deleteProjctImage(Request $request){
        $project = ProjectImage::findOrFail($request->id)->delete();
        return response()->json('deleted');
    }

    public static function getUserName($id){
        return User::where('userId',$id)->first()->name;
    }

    public function singleEvent($id){
        $event = Event::findOrFail($id);
//        return $event;
        return view('pages.SingleEvent')->with('event',$event);
    }

public function showEventsPage(){
        $event = Event::get();
        return view('Pages.pastevents')->with('events',$event);
}
}
