<?php

get('dashboard', 'DashboardController@index')->name('backend.dashboard');
get('calendars', 'CalendarController@index')->name('backend.calendar');
get('patients', 'PatientController@index')->name('backend.patient');
get('appointments', 'AppointmentController@index')->name('backend.appointment');
get('practitioners', 'PractitionerController@index')->name('backend.practitioner');
get('services', 'ServiceController@index')->name('backend.service');
get('reports', 'ReportController@index')->name('backend.report');