<?php

namespace App\Http\Livewire\Participants;
use App\Actions\Participant\ParticipantRead;
use \App\Actions\ReadParticipant as ReadPart;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Read extends Component
{
    public $participant;

    public function  mount(){
        $this->participant=ParticipantRead::make();
//        dd($this->participant);


    }
    public function render()
    {
        return view('livewire.participants.read');
    }
}
