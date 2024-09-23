<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class userResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $arr= [
            'id'=>$this->id,

            'email'=>$this->email,

            'role'=>$this->status,
            'created_at'=>$this->created_at->format('Y-m-d H:i:s'),

        ];
        if(isset($this->token)){
            $arr['token']=$this->token;
        }
        return $arr;


    }
}
