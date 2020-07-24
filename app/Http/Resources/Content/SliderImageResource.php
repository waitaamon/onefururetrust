<?php

namespace App\Http\Resources\Content;

use Illuminate\Http\Resources\Json\JsonResource;

class SliderImageResource extends JsonResource
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
        	'identifier' => $this->identifier,
			'title' => $this->title ?: '',
			'subtitle' => $this->subtitle ?: '',
			'title_color' => $this->title_color,
			'subtitle_color' => $this->subtitle_color,
        	'image' => url($this->getFirstMediaUrl('image')),
        	'created_at' => $this->created_at->diffForHumans()
		];
    }
}
