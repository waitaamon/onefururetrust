<?php

namespace App\Http\Controllers;

use App\Domain\Content\Gallery;
use App\Domain\Events\Event;
use App\Domain\Pages\About;
use App\Domain\Projects\Project;
use Illuminate\Http\Request;

class BaseController extends Controller
{
	public function index()
	{
		$projects = Project::where('live', true)->limit(3)->get();

		$events = Event::all();

		$photos = Gallery::first()
			->getMedia('gallery')
			->reverse()
			->take(6);

		return view('landing.index', compact('projects', 'photos', 'events'));
	}

	public function about()
	{
		$about = About::first();

		return view('about.index', compact('about'));
	}
}
