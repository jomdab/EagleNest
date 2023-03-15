<?php

namespace App\Http\Controllers;
use App\Models\Event;

use Illuminate\Http\Request;

class StarController extends Controller
{
    //
    public function toggleStar(Request $request)
    {
        $event = Event::find($request->id);
        if ($event->is_starred == true){
            $event->update([
                'is_starred'=>false
            ]);
        } else{
            $event->update([
                'is_starred'=>true
            ]);
        }
        
        $event->save();


        return redirect()->back();
    }
}
