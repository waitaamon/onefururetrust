<?php

namespace App\Http\Controllers\Content;

use App\Domain\Events\Event;
use App\Http\Controllers\Controller;
use App\Http\Resources\Content\EventResource;
use Illuminate\Http\Request;

class EventsController extends Controller
{
	/**
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$events = Event::orderBy('date', 'asc')->get();

		return response(EventResource::collection($events));
    }

	public function show($slug)
	{
		$event = Event::where('slug', $slug)->firstOrFail();

		return view('events.show', compact('event'));
    }
}
