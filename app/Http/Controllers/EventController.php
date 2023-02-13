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
        $event->save();

        return redirect()->back();
    }

    public function increase_vote(Request $request){
        
        $event = Event::find($request->id);

        Event::find($request->id)->update([
            'vote'=>($event->vote)+1
        ]);


        return redirect()->back()->with('voted',$request->vote)->with('event',$event);
        
    }

}
