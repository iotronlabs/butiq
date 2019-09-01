<?php

namespace App\Http\Resources\Auth;

use Illuminate\Http\Resources\Json\JsonResource;

class PrivateUserResource extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            
        'name' => $this->name,
        'id' => $this->id,
        'email' => $this->email,

        ];
    }
}
