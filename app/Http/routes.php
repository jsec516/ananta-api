<?php

$router->group(['namespace' => 'Frontend', 'middleware' => 'guest'], function () use ($router)
{
	get('/', 'FrontendController@index')->name('login');
});

$router->group(['namespace' => 'Auth'], function () use ($router)
{
	$router->group(['middleware' => 'guest'], function () use ($router)
	{
		// login request routes...
		get('login', 'AuthController@getLogin')->name('login');
		post('login', 'AuthController@postLogin')->name('login');
		
		// register request routes...
		get('register', 'AuthController@getRegister')->name('register');
		post('register', 'PasswordController@postRegister')->name('register');
		
		// Password reset link request routes...
		get('password/email', 'PasswordController@getEmail')->name('password.email');
		post('password/email', 'PasswordController@postEmail')->name('password.email');

		// Password reset routes...
		get('password/reset/{token}', 'PasswordController@getReset')->name('password.reset');
		post('password/reset', 'PasswordController@postReset')->name('password.reset');
	});

	/**
	 * These routes require the user to be logged in
	 */
	$router->group(['middleware' => 'auth'], function ()
	{
		get('logout', 'AuthController@getLogout')->name('logout');
		post('password/change', 'PasswordController@postChangePassword')->name('password.change');
	});
	
});

// frontend routes for authenticated auser
$router->group(['namespace' => 'Frontend', 'middleware' => ['auth']], function () use ($router)
{
	get('dashboard', 'DashboardController@getIndex')->name('dashboard');
	get('account/settings', 'UserController@getSettings')->name('user.setting');
});


Route::group(['middleware' => ['auth', 'confirmed'], 'before' => 'has_role:manage_users', 'prefix' => 'admin', 'namespace' => 'Admin'], function() {
	Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'DashboardController@index']);
});