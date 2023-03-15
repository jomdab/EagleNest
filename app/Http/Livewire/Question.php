<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;



class Question extends Component
{
    public $searchTerm='';
    public $event;
    public $roomId;
    public $vote;
    public $sort;
    public function render()
    {
        sleep(0.5);
        if($this->sort == 'vote'){
            $this->event = Event::where('text', 'LIKE', '%'.$this->searchTerm.'%')
                    ->orderBy('is_starred','desc')
                    ->orderBy('vote', 'desc')
                    ->get();
        }
        else{
            $this->event = Event::where('text', 'LIKE', '%'.$this->searchTerm.'%')
                    ->orderBy('is_starred','desc')
                    ->orderBy('created_at', 'desc')
                    ->get();
        }
        return view('livewire.question');
    }
}
