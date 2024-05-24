<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;


class MovieResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'year' => $this->year,
            'director' => $this->director,
            'genre' => $this->genre,
            'actors' => $this->actors,
            'images' => MovieImageResource::collection($this->whenLoaded('images')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
        
    }
}
