<?php

namespace App\Actions\Participant;

use App\Http\Resources\ParticipantResource;
use App\Models\Participant;
use Illuminate\Database\Eloquent\Collection;
use Lorisleiva\Actions\ActionRequest;
use Lorisleiva\Actions\Concerns\AsAction;
use phpDocumentor\Reflection\Types\Object_;

class ParticipantUpdate
{
    use AsAction;

    public function handle( $data,$id)
    {
//        // ...

        $paricipant=Participant::find($id);
         $paricipant->update($data);
//         dd('ali');
        return $paricipant;

    }
    public function asController(ActionRequest $request,$id) :Participant
    {
//        dd($request->validated());

        return $this->handle($request->toArray(),$id);
    }
    public function jsonResponse(Participant $participant): ParticipantResource
    {
        return new ParticipantResource($participant);
    }
}
