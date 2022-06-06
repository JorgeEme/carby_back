<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JourneyResource extends JsonResource
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
            "user_id" => $this->user_id,
            "vehicle_id" => $this->vehicle_id,
            "discount_id" => $this->discount_id,
            "starts_at" => $this->starts_at,
            "ends_at" => $this->ends_at,
            "journey_price" => number_format($this->journey_price, 2, '.', ''),
            "total_price" => number_format($this->total_price, 2, '.', ''),
            "invoice_url" => $this->invoice_url,
            // "invoice_path"=> $this->invoice_path,
            "vehicle" => VehicleResource::make($this->vehicle)
        ];
    }
}
