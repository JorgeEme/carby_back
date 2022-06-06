<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IssueResource extends JsonResource
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
            "subject"     => $this->subject,
            "description" => $this->description,
            "journey_id"  => $this->journey_id,
            "images"      => IssueMediaResource::collection($this->images),
        ];
    }
}
