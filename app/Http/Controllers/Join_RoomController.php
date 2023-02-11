<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Join_RoomController extends Controller
{
    public function joinRoom(Request $request)
    {
        $roomId = $request->input('roomId');
        return redirect()->route('room', ['roomId' => $roomId]);
    }
}
