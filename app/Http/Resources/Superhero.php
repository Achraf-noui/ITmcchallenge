<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Superhero extends JsonResource
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
          'name' => $this->name,
          'gender' => $this->gender,
          'strength' => $this->strength,
          'speed' => $this->speed,
          'intelligence' => $this->intelligence  
        ];
    }
}
