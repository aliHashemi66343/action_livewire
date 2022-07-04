<?php

namespace App\Actions;

use App\Http\Resources\ParticipantResource;
use App\Models\Participant;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Validation\Validator;


class CreateParticipant
{
    use AsAction;

    public $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'mobile' => 'required|size:11',
        'national_code' => 'required|numeric'
    ];

    public function handle($data)
    {
//        // ...
//////        ? where is the asObject method
//        $validatedDate = $request->validate($this->rules);
//        $new_participant = new Participant;
////        echo $validatedDate;
//        if (count($validatedDate->errors)>0){
//            $this->failedValidation($validatedDate);
//        }
//        foreach ($request->keys() as $key) {
//            $new_participant->$key = $request[$key];
//        }

//        $new_participant->save();
//
//        return response($new_participant,200);

//        return $this->rules();

        return Participant::create($data);

    }

    public function asController(Request $request)
    {
        return $this->handle($request->input());
    }

    public function jsonResponse(Participant $participant): ParticipantResource
    {
        return new ParticipantResource($participant);
    }
//
//    public function failedValidation(Validator $validator)
//    {
//        throw new HttpResponseException(response()->json([
//            'success'   => false,
//            'message'   => 'Validation errors',
//            'data'      => $validator->errors()
//        ]));
//    }
//
//
//
//    public function rules()
//    {
//        return $this->rules;
//    }


}
