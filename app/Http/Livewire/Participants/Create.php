<?php

namespace App\Http\Livewire\Participants;

use App\Models\Participant;
use Livewire\Component;
use \App\Actions\CreateParticipant as CreatePartiAction;

class Create extends Component
{
    public $first_name;
    public $last_name;

    public $mobile;
    public $national_code;

    protected function rules  (){
        return CreatePartiAction::make()->rules();
    }
    public function mount (){


    }



    public function submit()

    {

        $this->validate();



        // Execution doesn't reach here if validation fails.



        Participant::create([

            'first_name' => $this->first_name,

            'last_name' => $this->last_name,
            'mobile' => $this->mobile,
            'national_code' => $this->national_code,

        ]);


    }
    public function render()
    {
        return view('livewire.participants.create');
    }
}
