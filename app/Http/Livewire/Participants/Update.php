<?php

namespace App\Http\Livewire\Participants;

use App\Models\Participant;
use App\Actions\UpdateParticipant as UpdatePart;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Update extends Component
{
    public $first_name;
    public $last_name;

    public $mobile;
    public $national_code;
    public $participant;

    protected function rules  (){
        return UpdatePart::make()->rules();
    }
    public function mount (){
        $this->participant=UpdatePart::make()->getParticipant(Route::current()->parameter('participant'));
        $this->first_name=$this->participant->first_name;
        $this->last_name=$this->participant->last_name;
        $this->mobile=$this->participant->mobile;
        $this->national_code=$this->participant->national_code;


    }



    public function submit()

    {

        $this->validate();



        // Execution doesn't reach here if validation fails.



        $this->participant->update([

            'first_name' => $this->first_name,

            'last_name' => $this->last_name,
            'mobile' => $this->mobile,
            'national_code' => $this->national_code,

        ]);


    }
    public function render()
    {
        return view('livewire.Participants.update');
    }
}
