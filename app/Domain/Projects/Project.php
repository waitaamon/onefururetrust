<?php

namespace App\Domain\Projects;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
	protected $fillable = ['title', 'slug', 'short_description', 'description', 'date', 'live', 'cover_image'];

	protected $dates = [
		'date'
	];

	protected static function boot()
	{
		parent::boot();

		static::saving(function (Project $project) {
			$project->slug = Str::slug($project->title);
		});
	}

}
