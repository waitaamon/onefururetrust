<?php

//get slider images
Route::get('slider-images', 'Content\SliderImagesController');

//objectives
Route::get('objectives', 'Content\ObjectivesController');

//objectives
Route::get('partners', 'Partners\PartnersController@index');
