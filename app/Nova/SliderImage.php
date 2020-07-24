<?php

namespace App\Nova;

use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Timothyasp\Color\Color;

class SliderImage extends Resource
{
	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = 'App\\Domain\\Content\\SliderImage';

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
	public static $title = 'identifier';

	/**
	 * The columns that should be searched.
	 *
	 * @var array
	 */
	public static $search = [
		'id',
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

			Text::make('Title')
			->rules('nullable', 'string', 'max:255'),

			Text::make('Subtitle')
			->rules('nullable', 'string', 'max:350')
			->hideFromIndex(),

			Color::make('Title Color')
			->hideFromIndex(),

			Color::make('Subtitle Color')
			->hideFromIndex(),

			Images::make('Slider image', 'image')
				->conversionOnPreview('medium-size')
				->conversionOnDetailView('thumb')
				->conversionOnIndexView('thumb')
				->conversionOnForm('thumb')
				->fullSize()
				->rules('required'),

			Boolean::make('Active'),

			DateTime::make('Uploaded on', 'created_at')
				->hideWhenCreating()
				->hideWhenUpdating()
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
