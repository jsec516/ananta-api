<?php

namespace Qclinic\Http\Controllers\Frontend;

use Qclinic\Http\Controllers\Controller;

/**
 * Class UserController
 * @package Qclinic\Http\Controllers\Frontend
 */
class UserController extends Controller 
{

	/**
	 * Check to see if the application is installed
	 * Redirect to the installer if need be
     */
	public function __construct() {
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function getSettings()
	{
		javascript()->put([
			'test' => 'it works!'
		]);

		return view('frontend.index');
	}

}

