<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index($roomId){
        return view('user_room',compact('roomId'));
    }
}
