<?php

/*
|--------------------------------------------------------------------------
| CodeFire Application Routes
|--------------------------------------------------------------------------
|
| These routes are necessary for CodeFire in order to work. DO NOT CHANGE
| THEM WITHOUT KNOWING WHAT YOU'RE DOING!
|
*/

// Administration routing
Route::group(array('prefix' => 'cf-admin', 'before' => 'auth'), function()
{
	// Dashboard and initial page
	Route::get('/', array('as' => 'dashboard'), function()
	{
		return View::make('hello');
	});

	// Editorial: Page management
	Route::get('pages', function()
	{

	});

	// Media Library: Site content
	Route::get('media', function()
	{

	});

	// Access management: Users, groups and permissions
	Route::get('access', function()
	{
		return View::make('hello');
	});

	// Extensions: Modules and templates
	Route::get('extensions', function()
	{

	});

	// Site settings
	Route::get('settings', function()
	{

	});
});

// Basic user access routes
Route::get('login', 'CodeFire\Access\AccessController@getLogin')->before('guest');
Route::post('login', 'CodeFire\Access\AccessController@postLogin');

Route::get('logout', 'CodeFire\Access\AccessController@getLogout')->before('auth');
Route::post('logout', 'CodeFire\Access\AccessController@postLogout');

// Default home page
Route::any('/', array('as' => 'home', function()
{
	return View::make('hello');
}));
