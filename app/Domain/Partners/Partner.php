<?php

namespace App\Domain\Partners;

use App\Domain\Projects\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia\{HasMedia, HasMediaTrait};

class Partner extends Model implements HasMedia
{
	use HasMediaTrait;

	protected $fillable = ['category', 'interest_id', 'project_id', 'name', 'slug', 'description', 'location', 'email', 'phone', 'approved'];

	protected static function boot()
	{
		parent::boot();

		static::saving(function (Partner $partner) {
			$partner->slug = Str::slug($partner->name);
		});
	}

	public function interest()
	{
		return $this->belongsTo(PartnerAreaOfInterest::class, 'interest_id');
	}

	public function project()
	{
		return $this->belongsTo(Project::class, 'project_id');
	}

	public function scopeActive($query)
	{
		return $query->where('approved', true);
	}

	public function registerMediaCollections()
	{
		$this->addMediaCollection('logo')->singleFile();
		$this->addMediaConversion('logo-thumb')->width(130)->height(130);
		$this->addMediaConversion('logo-medium-size')->width(200)->height(200);

		$this->addMediaCollection('gallery');
		$this->addMediaConversion('thumb')->width(130)->height(130);
		$this->addMediaConversion('medium-size')->width(200)->height(200);
	}
}
