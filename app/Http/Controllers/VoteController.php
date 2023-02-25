<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Vote;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function increase_vote(Request $request){
        
        $event = Event::find($request->id);
        Event::find($request->id)->update([
            'vote'=>($event->vote)+1
        ]);

        $vote = new Vote;
        $vote->user_id = Auth::user()->id;
        $vote->question_id = $request->id;
        $vote->save();


        return redirect()->back();
        
    }

    public function delete_vote(Request $request){
        
        $event = Event::find($request->id);
        Event::find($request->id)->update([
            'vote'=>($event->vote)-1
        ]);

        Vote::find($request->vote_id)->forceDelete();

        return redirect()->back();
        
    }
}
