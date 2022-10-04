<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function show($id){
        $meeting = response()->json(Meeting::find($id));
    }
    public function edit(){

    }
    public function new(){

    }
    public function listView(){

    }
    public function editView($id){

    }
    public function newView(){

    }
}
