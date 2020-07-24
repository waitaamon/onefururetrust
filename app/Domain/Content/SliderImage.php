<?php

namespace App\Domain\Content;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class SliderImage extends Model implements HasMedia
{
	use HasMediaTrait;

    protected $fillable = ['identifier', 'title', 'subtitle', 'title_color', 'subtitle_color', 'active'];

	protected static function boot()
	{
		parent::boot();

		static::creating(function (SliderImage $image) {
			$image->identifier = Str::uuid();
		});
	}

	public function registerMediaCollections()
	{
		$this->addMediaCollection('image')->singleFile();
		$this->addMediaConversion('thumb')->width(130)->height(130);
		$this->addMediaConversion('medium-size')->width(200)->height(200);
	}
}
