<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
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
            "lat" => $this->lat,
            "lng" =>  $this->lng,
            "available" => $this->available,
            "distance"=> $this->distance ? round($this->distance, 3) : null,
            "is_booked" => $this->is_booked,
            "address"  => $this->address,
            "created_at" => $this->created_at,
            "vehicle_type" => VehicleTypeResource::make($this->vehicle_type),
        ];
    }
}
