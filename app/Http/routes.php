<?php

/*
 * |--------------------------------------------------------------------------
 * | Application Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register all of the routes for an application.
 * | It's a breeze. Simply tell Laravel the URIs it should respond to
 * | and give it the controller to call when that URI is requested.
 * |
 */
$app->get ( '/', function () use($app) {
	return $app->welcome ();
});

/*$app->get ( 'user/', [ 
		'as' => 'get_user',
		'uses' => 'UserController@repoPractice' 
]);*/

$app->post ( 'user/save', [ 
		'as' => 'save_user',
		'uses' => 'UserController@store' 
]);

$app->post ( 'clinic/save', [ 
		'as' => 'save_clinic',
		'uses' => 'ClinicController@store' 
]);

