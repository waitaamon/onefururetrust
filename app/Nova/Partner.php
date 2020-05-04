<?php

namespace App\Nova;

use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Partner extends Resource
{
	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = 'App\\Domain\\Partners\\Partner';

	/**
	 * The logical group associated with the resource.
	 *
	 * @var string
	 */
	public static $group = 'Partners';

	/**
	 * The single value that should be used to represent the resource when being displayed.
	 *
	 * @var string
	 */
	public static $title = 'name';

	/**
	 * The columns that should be searched.
	 *
	 * @var array
	 */
	public static $search = [
		'name',
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

			Select::make('Category')
				->options([
					'donor' => 'Donor',
					'organization' => 'Organization',
					'volunteer' => 'Volunteer',
				])
				->rules('required'),

			Text::make('Name')
				->rules('required', 'string', 'max:150'),

			Textarea::make('Description')
			->rules('required', 'string', 'max:400'),

			Text::make('Location')
				->rules('required', 'string'),

			Text::make('Email')
				->rules('required', 'email'),

			Text::make('Phone')
				->rules('required', 'string'),

			Number::make('Amount')
				->rules('nullable', 'numeric'),

			Boolean::make('Approved')
				->rules('boolean'),

			BelongsTo::make('Project')
				->nullable()
				->hideFromIndex(),

			BelongsTo::make('Partner Area Of Interest', 'interest')
				->nullable()
				->hideFromIndex(),

			Images::make('Logo')
				->conversionOnPreview('logo-medium-size')
				->conversionOnDetailView('logo-thumb')
				->conversionOnIndexView('logo-thumb')
				->conversionOnForm('logo-thumb')
				->fullSize()
				->rules('required'),

			Images::make('Photos', 'gallery')
				->conversionOnPreview('medium-size')
				->conversionOnDetailView('thumb')
				->conversionOnIndexView('thumb')
				->conversionOnForm('thumb')
				->fullSize()
				->rules('nullable'),
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
