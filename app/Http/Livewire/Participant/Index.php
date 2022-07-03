<?php

namespace App\Http\Livewire\Participant;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Livewire\Component;

class Index extends Component
{
    public $testAppendData = [
        'hi',
        'test',
    ];

    public Collection $participants;

    public function mount(Request $request)
    {
        $this->participants = \App\Actions\Participant\ParticipantIndex::make()->handle($request->input());
    }

    public function render()
    {
        return view('livewire.participant.index');
    }
}
