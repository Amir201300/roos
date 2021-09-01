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
            'username' => $this->username,
            'status' => (int)$this->status,
            'social'=>(int)$this->social,
            'gender'=>(int)$this->gender,
            'firstName'=>$this->firstName,
            'lastName'=>$this->lastName,
            'image' => getImageUrl('users',$this->image),
            'token' => $this->user_token,
        ];
    }
}
