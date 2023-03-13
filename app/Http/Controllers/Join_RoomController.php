<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Join_RoomController extends Controller
{
    public function joinRoom(Request $request)
    {
        $roomId = $request->input('roomId');
        $user = Auth::user();
        $user->room = $roomId;
        $user->save();
        return redirect()->route('room', ['roomId' => $roomId]);
    }
}
