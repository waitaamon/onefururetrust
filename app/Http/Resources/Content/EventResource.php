<?php

namespace App\Http\Resources\Content;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
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
        	'link' => $this->link,
        	'date' => $this->date,
        	'description' => $this->description,
			'image' => url('storage/' . $this->image)
		];
    }
}
