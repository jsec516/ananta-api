<?php

get('dashboard', 'DashboardController@index')->name('backend.dashboard');
get('calendars', 'CalendarController@index')->name('backend.calendar');
get('patients', 'PatientController@index')->name('backend.patient');
get('users', 'UserController@index')->name('backend.user');
get('appointments', 'AppointmentController@index')->name('backend.appointment');
get('waitings', 'WaitingController@index')->name('backend.waiting');
get('practitioners', 'PractitionerController@index')->name('backend.practitioner');
get('services', 'ServiceController@index')->name('backend.service');
get('reports', 'ReportController@index')->name('backend.report');
get('reminders/{type}', 'ReminderController@getIndex')->name('backend.reminder');
get('settings/schedule', 'SettingController@getSchedule')->name('backend.setting.schedule');
get('settings/user', 'UserController@index')->name('backend.setting.user');
get('settings/account', 'SettingController@getAccount')->name('backend.setting.account');
