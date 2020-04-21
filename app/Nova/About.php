<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class About extends Resource
{
	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = 'App\\Domain\\Pages\\About';

	/**
	 * The logical group associated with the resource.
	 *
	 * @var string
	 */
	public static $group = 'Pages';

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
	 * Get the displayable label of the resource.
	 *
	 * @return string
	 */
	public static function label()
	{
		return 'About us';
	}

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
				->readonly(),

			Trix::make('body')
				->rules('required'),

			Image::make('Image')
				->disableDownload()
				->maxWidth(130)
				->disk('public'),

			DateTime::make('Updated At')
				->readonly()
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
