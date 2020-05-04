<?php

namespace App\Domain\Events;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'date', 'image', 'description', 'link'];

    protected $dates = [
		'date'
	];
}
