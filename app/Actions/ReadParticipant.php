<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;

class ReadParticipant
{
    use AsAction;

    public function handle()
    {
        // ...
        return view('livewire.read-participant');

    }
}
