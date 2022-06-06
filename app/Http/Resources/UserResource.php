<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "surnames" => $this->surnames,
            "full_name"=> $this->full_name,
            "email" => $this->email,
            "notifications" => $this->notifications,
            "phone" => $this->phone,
            "address" => $this->address,
            "birth_date" => $this->birth_date,
            "validated" => $this->validated,
            "avatar_url" => $this->avatar_url,
            "rol"       => RolResource::make($this->rol),
        ];
    }
}
