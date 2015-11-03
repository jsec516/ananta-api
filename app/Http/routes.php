<?php
Route::get('login', ['as' => 'login', 'uses' => 'Auth\AuthController@getlogin']);

Route::group(['middleware' => ['auth', 'confirmed'], 'before' => 'has_role:manage_users', 'prefix' => 'admin', 'namespace' => 'Admin'], function() {
	Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'DashboardController@index']);
	Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
});