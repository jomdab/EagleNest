<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;

class QuestionAdminroom extends Component
{
    public $searchTerm='';
    public $event;
    public $trash;
    public $roomId;
    public $vote;
    public $sort;
    public $show_hidden;
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

        if($this->sort == 'vote'){
            $this->trash = Event::onlyTrashed()->where('text', 'LIKE', '%'.$this->searchTerm.'%')
                    ->orderBy('is_starred','desc')
                    ->orderBy('vote', 'desc')
                    ->get();
        }
        else{
            $this->trash = Event::onlyTrashed()->where('text', 'LIKE', '%'.$this->searchTerm.'%')
                    ->orderBy('is_starred','desc')
                    ->orderBy('created_at', 'desc')
                    ->get();
        }
        return view('livewire.question-adminroom');
    }
}
