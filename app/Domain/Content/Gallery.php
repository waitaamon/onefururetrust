<?php

namespace App\Domain\Content;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Gallery extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = ['identifier', 'title'];

	public function registerMediaCollections()
	{
		$this->addMediaCollection('gallery');
		$this->addMediaConversion('thumb')->width(130)->height(130);
		$this->addMediaConversion('medium-size')->width(200)->height(200);
	}
}
