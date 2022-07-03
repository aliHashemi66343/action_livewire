<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;

class IndexParticipant
{
    use AsAction;

    public function handle()
    {
        // ...
        return view('livewire.index-participant');

    }
}
