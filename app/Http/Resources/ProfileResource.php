<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'bio' => $this->bio,
            'name' => $this->name,
            'birth_date' => $this->birth_date,
            'age' => $this->age,
            'website' => $this->website,
            'degree' => $this->degree,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'freelance' => $this->freelance,
            'pic' => $this->pic,
        ];
    }
}
