<?php

namespace App\Actions\Participant;

use App\Http\Resources\ParticipantResource;
use App\Models\Participant;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;
use phpDocumentor\Reflection\Types\Object_;

class ParticipantRead
{
    use AsAction;

    public function handle($id)
    {
        // ...
        $participant=Participant::find($id);
        if (isset($participant)) {
            return $participant;
        }
        else{
            return abort(404);
        }


    }
    public function asController ($id):Participant
    {
        return $this->handle($id);

    }
    public function jsonResponse ($participant):ParticipantResource
    {
        return new ParticipantResource($participant);
    }

}
