<?php

namespace App\Actions;

use App\Models\Participant;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Validation\Validator;
use Lorisleiva\Actions\Concerns\AsController;
use Lorisleiva\Actions\Concerns\AsObject;


class CreateParticipant
{
    use AsAction;

    public $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'mobile' => 'required|size:11',
        'national_code' => 'required|numeric'
    ];

    public function handle(Request $request)
    {
        // ...
////        ? where is the asObject method
        $validatedDate = $request->validate($this->rules);
        $new_participant = new Participant;
//        echo $validatedDate;
        if (count($validatedDate->errors)>0){
            $this->failedValidation($validatedDate);
        }
        foreach ($request->keys() as $key) {
            $new_participant->$key = $request[$key];
        }

        $new_participant->save();

        return response($new_participant,200);

//        return $this->rules();

    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ]));
    }



    public function rules()
    {
        return $this->rules;
    }


}
