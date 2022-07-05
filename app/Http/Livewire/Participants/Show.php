<?php

namespace App\Http\Livewire\Participants;

use Livewire\Component;

class Show extends Component
{
    public $participant;
    public function mount ($participant){
        $this->participant=$participant;
    }
    public function render()
    {
        return view('livewire.participants.show');
    }
}
