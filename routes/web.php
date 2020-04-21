<?php

Route::get('/', 'BaseController@index');

Route::get('about-us', 'BaseController@about');


Route::get('projects', 'Projects\ProjectsController');

Route::get('gallery', 'Content\GalleryController');

Route::get('events', 'Content\EventsController@index');
Route::get('events/{slug}', 'Content\EventsController@show');


Route::get('contact-us', 'Contacts\ContactController@index')->name('contact.index');
Route::post('contact-us', 'Contacts\ContactController@store')->name('contact.post');

Route::get('partner/prerequisites', 'Partners\PartnersController@prerequisites')->name('partner.prerequisites');
Route::get('get-involved', 'Partners\PartnersController@create')->name('partner.create');
Route::post('get-involved', 'Partners\PartnersController@store')->name('partner.post');
