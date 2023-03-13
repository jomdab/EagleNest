<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;

class RoomController extends Controller
{

    public function store(Request $request)
    {

        // Validate the input
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);
        // Generate a random room_id
        $room_id = strval(rand(100000, 999999));
        // Create a new room
        $room = new Room;
        $room->room_id = $room_id;
        $room->user_id = Auth::user()->id;
        $room->name = $request->name;
        $room->status = "wait";
        $room->save();

        return redirect()->back();
    }

    public function show($room_id)
    {
        $room = Room::where('room_id', $room_id)->firstOrFail();

        return view('room.show', ['room' => $room]);
    }
}
