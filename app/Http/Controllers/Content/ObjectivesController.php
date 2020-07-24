<?php

namespace App\Http\Controllers\Content;

use App\Domain\Content\Objective;
use App\Http\Controllers\Controller;
use App\Http\Resources\Content\ObjectiveResource;
use Illuminate\Http\Request;

class ObjectivesController extends Controller
{
	public function __invoke()
	{
        $objectives = Objective::all();

        return response(ObjectiveResource::collection($objectives));
    }
}
