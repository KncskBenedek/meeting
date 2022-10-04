<?php

namespace App\Http\Controllers;

use App\Models\Meeting;

use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function show($id){
        $meeting = response()->json(Meeting::find($id));
        return $meeting;
        
    }

    public function edit(Request $request, $id){
        $meeting = Meeting::find($id);
        $meeting->date = $request->date;
        $meeting->location = $request->location;
        $meeting->max_number = $request->max_number;
        $meeting->save();
    }

    public function new(Request $request){
        $meeting = new Meeting();
        $meeting->date = $request->date;
        $meeting->location = $request->location;
        $meeting->max_number = $request->max_number;
        $meeting->save();
    }

    public function delete($id){
        Meeting::find($id)->delete();
    }

    public function listView(){
        $meetings = Meeting::all();
        return view('meeting.list',['meetings'=> $meetings]);
    }

    public function editView($id){
        $meeting = Meeting::find($id);
        return view('meeting.edit', ['meeting'=> $meeting]);
    }

    public function newView(){
        return view('meeting.new');
    }

}
