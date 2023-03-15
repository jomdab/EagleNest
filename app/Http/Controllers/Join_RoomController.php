<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;

class Join_RoomController extends Controller
{
    public function joinRoom(Request $request)
    {
        $roomId = $request->input('roomId');

        $user = Auth::user();
        $room = Room::where('room_id', $roomId)->first();
        
        if(!$room){
            echo "<script>alert('Event not found!');document.location='/dashboard'</script>";
        } elseif ($room->status === 'wait') {
            echo "<script>alert('Event is not started yet!');document.location='/dashboard'</script>";
        } elseif ($room->status === 'progress') {
            $user->room = $roomId;
            $user->save();
            return redirect()->route('room', ['roomId' => $roomId]);
        } elseif ($room->status === 'finished') {
            echo "<script>alert('Event finished!');document.location='/dashboard'</script>";
        }
    }
}