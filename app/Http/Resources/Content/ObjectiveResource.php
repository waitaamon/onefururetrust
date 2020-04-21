<?php

namespace App\Http\Resources\Content;

use Illuminate\Http\Resources\Json\JsonResource;

class ObjectiveResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        	'id' => $this->id,
        	'title' => $this->title,
        	'description' => $this->description,
        	'icon' => url('storage/' . $this->icon)
		];
    }
}
