<?php

namespace App\Http\Livewire\Participants;

use App\Models\Participant;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Delete extends Component
{
    public $partId;
    public function  mount(){

        $this->partId=Route::current()->parameter('participant');

    }
    public function delete  (){

            Participant::destroy($this->partId);

    }
    public function render()
    {
        return view('livewire.participants.delete');
    }

}
