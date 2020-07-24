<?php

namespace App\Http\Controllers\Content;

use App\Domain\Content\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
	public function __invoke()
	{
		$photos = Gallery::first()
			->getMedia('gallery')
			->reverse();

		return view('gallery.index', compact('photos'));
	}
}
