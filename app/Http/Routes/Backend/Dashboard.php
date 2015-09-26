<?php
get('/', 'DashboardController@index');
get('dashboard', 'DashboardController@index')->name('backend.dashboard');
get('auth/logout', 'Auth\AuthController@getLogout')->name('auth.logout');