<?php

namespace Laravel\Nova\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Http\Requests\RestoreLensResourceRequest;
use Laravel\Nova\Nova;

class LensResourceRestoreController extends Controller
{
    /**
     * Force delete the given resource(s).
     *
     * @param  \Laravel\Nova\Http\Requests\RestoreLensResourceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function handle(RestoreLensResourceRequest $request)
    {
        $request->chunks(150, function ($models) use ($request) {
            $models->each(function ($model) use ($request) {
                $model->restore();

                DB::table('action_events')->insert(
                    Nova::actionEvent()->forResourceRestore($request->user(), collect([$model]))
                                ->map->getAttributes()->all()
                );
            });
        });
    }
}
