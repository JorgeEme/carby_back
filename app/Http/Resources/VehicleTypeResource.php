<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VehicleTypeResource extends JsonResource
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
            "id"=> $this->id,
            "name"=> $this->name,
            "brand"=> $this->brand,
            "model"=> $this->model,
            "price_by_minute"=> number_format($this->price_by_minute, 2, '.', ''),
            "seats"=> $this->seats,
            "doors"=> $this->doors,
            "automony_km"=> $this->automony_km,
            "horse_power"=> $this->horse_power,
            "gear"=>  $this->gear,
            "air_conditioning"=> $this->air_conditioning,
            "spare_wheel"=> $this->spare_wheel,
            "smart_screen"=> $this->smart_screen,
            "back_cam"=> $this->back_cam,
            "parking_sensor"=> $this->parking_sensor,
            "auto_emergency_braking"=> $this->auto_emergency_braking,
            "created_at"=> $this->created_at,
            "images"=> VehicleTypeMediaResource::collection($this->images)
        ];
    }
}
