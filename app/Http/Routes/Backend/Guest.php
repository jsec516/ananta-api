<?php

/**
* These reoutes require the user NOT be logged in
*/
$router->group(['prefix' => 'admin', 'middleware' => 'guest'], function () use ($router)
{
	// Authentication routes...
	get('login', 'Auth\AuthController@getLogin')->name('admin.login');
	post('login', 'Auth\AuthController@postLogin')->name('admin.login');
	
	// Password reset link request routes...
	get('forgot-password', 'Auth\PasswordController@getEmail')->name('admin.forgot_passwd');
	post('forgot-password', 'Auth\PasswordController@postEmail')->name('admin.forgot_passwd');

	// Password reset routes...
	get('password/reset/{token}', 'Auth\PasswordController@getReset');
	post('password/reset', 'Auth\PasswordController@postReset');

});