<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\Manage\BaseController;


class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'phone' => $this->phone,
            'email' => $this->email,
            //'status' => (int)$this->status,
            'firstName'=>$this->firstName,
            'lastName'=>$this->lastName,
            'country'=>$this->country ? new CountryResource($this->country) : null,
            'token' => $this->user_token,
        ];
    }
}
