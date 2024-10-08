<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'comment'=>$this->comment,
            'user_id'=>$this->user_id,
            'ticket_id'=>$this->ticket_id,
            'created_at'=>$this->created_at->format('d-m-Y'),
        ];
    }
}
