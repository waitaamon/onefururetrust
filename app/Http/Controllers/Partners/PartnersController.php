<?php

namespace App\Http\Controllers\Partners;

use App\Domain\Partners\Partner;
use App\Domain\Partners\PartnerAreaOfInterest;
use App\Domain\Projects\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
	public function prerequisites()
	{
		return response()->json([
			'projects' => Project::where('live', true)->get(),
			'interests' => PartnerAreaOfInterest::all(),
		]);
	}

	public function index()
	{
		$partners = Partner::where('approved', true)->get();

		return view('partners.index', compact('partners'));
	}

	public function create()
	{
		return view('partners.get-involved');
	}

	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required|string|min:3|max:200',
			'location' => 'required|string|min:3|max:200',
			'email' => 'required|string|email|max:200',
			'phone' => 'required|string|min:3|max:20',
			'category' => 'required|string',
			'interest' => ' nullable|integer',
			'project' => 'nullable|integer',
		]);

		Partner::create(array_merge([
				'project_id' => $request->project,
				'interest_id' => $request->interest,
			], $request->only('name', 'location', 'email', 'phone', 'category')
		));
	}

	public function show($slug)
	{
		$partner = Partner::where('slug', $slug)->firstOrFail();

		return view('partners.show', compact('partner'));
	}
}
