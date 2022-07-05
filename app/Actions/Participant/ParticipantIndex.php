<?php

namespace App\Actions\Participant;

use App\Http\Resources\ParticipantResourceCollection;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Lorisleiva\Actions\Concerns\AsAction;

class ParticipantIndex
{
    use AsAction;

    public function handle($filters): \Illuminate\Database\Eloquent\Collection
    {
        // In practice, we need filters, policy check and other actions before returning Participant collection.
        return Participant::all();
    }

    public function asController(Request $request): \Illuminate\Database\Eloquent\Collection
    {
//        echo "ali";
//        dd($this->handle($request->input()));
        return $this->handle($request->input());

    }

    public function jsonResponse($participants,Request $request): ParticipantResourceCollection
    {
//        echo $Participants[0];
//        echo "ali";

        return new ParticipantResourceCollection($participants);
    }

}
