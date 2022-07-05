<?php

namespace App\Actions\Participant;

use App\Models\Participant;
use Lorisleiva\Actions\Concerns\AsAction;

class ParticipantDelete
{
    use AsAction;

    public function handle($id)
    {
        // ...
        Participant::destroy($id);

    }
    public function asController ($id){
        $this->handle($id);
    }
}
