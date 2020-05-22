<?php

namespace App\Domain\Content;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = ['title', 'identifier', 'slug', 'body', 'cover', 'description', 'published', 'published_on'];

    protected $dates =[ 'published_on'];


	protected static function boot()
	{
		parent::boot();

		static::creating(function (Blog $blog) {
			$blog->identifier = Str::uuid();
		});

		static::saving(function (Blog $blog) {
			$blog->slug = Str::slug($blog->title);
		});
	}

}
