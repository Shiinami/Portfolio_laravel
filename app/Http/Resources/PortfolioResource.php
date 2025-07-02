<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PortfolioResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'image' => asset('storage/' . $this->image),
            'category' => $this->category,
            'project_date' => $this->project_date,
            'link' => $this->link,
            'client' => $this->client,
        ];
    }
}
