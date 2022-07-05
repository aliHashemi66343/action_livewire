<?php

namespace App\Actions\Participant;

use App\Http\Resources\ParticipantResource;
use App\Models\Participant;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Lorisleiva\Actions\ActionRequest;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Validation\Validator;


class ParticipantCreate
{
    use AsAction;

    public $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'mobile' => 'required|size:11',
        'national_code' => 'required|numeric'
    ];

    public function handle(ActionRequest $data)
    {
//        // ...


        return Participant::create($data->toArray());

    }
//    public function rules():array {
//        return [
//            'first_name' => ['required'],
//            'last_name' => ['required'],
//            'mobile' => ['required','size:11'],
//            'national_code' => ['required','numeric'],
//        ];
//    }

    public function asController(ActionRequest $request) :Collection
    {
//        dd($request->validated());
        return $this->handle($request);
    }

    public function jsonResponse(Participant $participant): ParticipantResource
    {
//        dd('ali');
        return new ParticipantResource($participant);
    }



}
