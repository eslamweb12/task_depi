<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'info'=>$this->info,
            'title'=>$this->title,
            'type'=>$this->type,
            'created_at'=>$this->created_at->format('d-m-Y'),
        ];
    }

}
