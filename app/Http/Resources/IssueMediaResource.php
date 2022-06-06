<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IssueMediaResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "media" => $this->media_url
        ];
    }
}
