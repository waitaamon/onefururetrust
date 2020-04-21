<?php

namespace App\Domain\Partners;

use App\Domain\Projects\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Partner extends Model
{
	protected $fillable = ['category', 'interest_id', 'project_id', 'name', 'location', 'email', 'phone', 'amount', 'approved'];

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
}
