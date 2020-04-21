<?php

namespace App\Http\Controllers\Content;

use App\Domain\Events\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventsController extends Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$upcoming = Event::where('date', '>', today())->get();

		$previous = Event::where('date', '<', today())->get();

		return view('events.index', compact('upcoming', 'previous'));
    }

	public function show($slug)
	{
		$event = Event::where('slug', $slug)->firstOrFail();

		return view('events.show', compact('event'));
    }
}
