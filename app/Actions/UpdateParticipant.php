<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;

class UpdateParticipant
{
    use AsAction;

    public function handle()
    {
        // ...
        return view('livewire.update-participant');

    }
}
