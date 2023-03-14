<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;

class RoomManage extends Component
{
    public $searchTerm='';
    public $room;

    public function render()
    {
        sleep(0.5);
        $this->rooms = Room::where('name', 'LIKE', '%'.$this->searchTerm.'%')
            ->where('user_id',Auth::user()->id)
            ->get();
        return view('livewire.room-manage');
    }
}
