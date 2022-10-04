<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function show($id){
        return response()->json(Meeting::find($id));
        
    }
    public function edit(Response $response, $id){
        $meeting = Meeting::find($id);
        $meeting->date = $response->date;
        $meeting->location = $response->location;
        $meeting->max_number = $response->max_number;
        $meeting->save();
    }
    public function new(Response $response){
        $meeting = new Meeting();
        $meeting->date = $response->date;
        $meeting->location = $response->location;
        $meeting->max_number = $response->max_number;
        $meeting->save();
    }
    public function delete($id){
        Meeting::find($id)->delete();
    }
    public function listView(){
        $meetings = Meeting::all();
        return view('meeting.list', ['meetings'=> $meetings]);
    }
    public function editView($id){
        $meeting = Meeting::find($id);
        return view('meeting.edit', ['meeting'=> $meeting]);
    }
    public function newView(){
        return view('meeting.new');
    }
}
