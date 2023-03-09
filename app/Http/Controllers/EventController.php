<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;




class EventController extends Controller
{
    public function index($roomId){
        return view('user_room',compact('roomId'));
    }

    public function store(Request $request,$roomId){
        $request->validate([
            'question'=>'required|max:255'
        ]);


        $event = new Event;
        $event->room_id = $roomId;
        $event->user_id = Auth::user()->id;
        $event->text = $request->question;
        $event->vote = 1;
        if($request->anonymous === null)
            $event->anonymous = 0;
        else
            $event->anonymous = $request->anonymous;
        $event->save();

        return redirect()->back();
    }


    public function delete(Request $request){
        
        Event::find($request->id)->forceDelete();

        return redirect()->back();
        
    }




}
