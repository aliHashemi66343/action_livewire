<?php

namespace App\Http\Livewire\Participants;
use App\Actions\Participant\ParticipantIndex;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Collection;


class Index extends Component
{
    public Collection $participants;

    public function mount(Request $request)
    {
        $this->participants = \App\Actions\Participant\ParticipantIndex::make()->handle($request->input());
    }
    public function render()
    {
        return view('livewire.participants.index');
    }
}
