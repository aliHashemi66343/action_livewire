<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowParticipant extends Component
{
    public $participant;
    public function mount ($participant){
        $this->participant=$participant;
    }
    public function render()
    {
        return view('livewire.show-participant');
    }
}
