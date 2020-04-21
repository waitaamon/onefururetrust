<?php

namespace App\Domain\Events;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    protected $fillable = ['title', 'slug', 'location', 'date', 'image', 'short_description', 'description'];

    protected $dates = [
		'date'
	];

	protected static function boot()
	{
		parent::boot();

		static::saving(function (Event $event) {
			$event->slug = Str::slug($event->title);
		});
	}
}
