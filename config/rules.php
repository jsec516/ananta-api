<?php

return [
	'createClinic' => [
		'name' => 'required',
		'email' => 'required|unique:users',
		'username' => 'required|unique:users'
	],
	'createUser' => [
		'first_name' => 'required',
		'last_name' => 'required',
		'email' => 'required|unique:users',
		'password' => 'required',
		'repassword' => 'required|same:password'
	],
	'createPayment' => [
		'card_no' => 'required',
		'cvc' => 'required',
		'expired_month' => 'required',
		'expired_year' => 'required'
	],
	'forgotPassword' => [
		'email' => 'required'
	]
];