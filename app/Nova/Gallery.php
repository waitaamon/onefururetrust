<?php

namespace App\Nova;

use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Gallery extends Resource
{
	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = 'App\\Domain\\Content\\Gallery';

	/**
	 * The logical group associated with the resource.
	 *
	 * @var string
	 */
	public static $group = 'Content';

	/**
	 * The single value that should be used to represent the resource when being displayed.
	 *
	 * @var string
	 */
	public static $title = 'title';

	/**
	 * The columns that should be searched.
	 *
	 * @var array
	 */
	public static $search = [
		'title',
	];

	/**
	 * Get the fields displayed by the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function fields(Request $request)
	{
		return [
			ID::make()->sortable(),
			Text::make('Identifier')
				->readonly(),

			Text::make('Title')
				->readonly(),

			DateTime::make('Updated on', 'updated_at')
				->readonly(),

			Images::make('Photos', 'gallery')
				->conversionOnPreview('medium-size')
				->conversionOnDetailView('thumb')
				->conversionOnIndexView('thumb')
				->conversionOnForm('thumb')
				->fullSize()
				->rules('required')
				->singleImageRules('dimensions:min_width=100'),
		];
	}

	/**
	 * Get the cards available for the request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function cards(Request $request)
	{
		return [];
	}

	/**
	 * Get the filters available for the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function filters(Request $request)
	{
		return [];
	}

	/**
	 * Get the lenses available for the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function lenses(Request $request)
	{
		return [];
	}

	/**
	 * Get the actions available for the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function actions(Request $request)
	{
		return [];
	}
}
