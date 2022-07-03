<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;

class DeleteParticipant
{
    use AsAction;

    public function handle()
    {
        // ...
        return view('livewire.delete-participant');

    }
}
