<?php

namespace App\Http\Controllers\Content;

use App\Domain\Content\SliderImage;
use App\Http\Controllers\Controller;
use App\Http\Resources\Content\SliderImageResource;

class SliderImagesController extends Controller
{
	public function __invoke()
	{
		$images = SliderImage::where('active', true)
			->get()
			->shuffle();

		return response(SliderImageResource::collection($images));
	}
}
