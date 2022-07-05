<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ParticipantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $mobile=$this->resource->mobile;
        $mobile_with_code="+98".substr($mobile,1);
        return [
            'id'=>$this->resource->id,
            'first_name'=>$this->resource->first_name,
            'last_name'=>$this->resource->last_name,
            'national_code'=>$this->resource->national_code,
            'mobile'=>$mobile_with_code,
        ];
    }
}
