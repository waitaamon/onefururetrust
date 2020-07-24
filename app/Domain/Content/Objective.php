<?php

namespace App\Domain\Content;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Objective extends Model
{
	protected $fillable = ['title', 'identifier', 'description', 'icon'];

	protected static function boot()
	{
		parent::boot();

		static::creating(function (Objective $function) {
			$function->identifier = Str::uuid();
		});
	}
}
