<?php

namespace App\Http\Controllers\Projects;

use App\Domain\Projects\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
	public function __invoke()
	{
		$projects = Project::where('live', true)->paginate(9);

		return view('projects.index', compact('projects'));
    }
}
