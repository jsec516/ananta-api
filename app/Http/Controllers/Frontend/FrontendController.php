<?php

namespace Qclinic\Http\Controllers\Frontend;

use Qclinic\Http\Controllers\Controller;

/**
 * Class FrontendController
 * @package Qclinic\Http\Controllers
 */
class FrontendController extends Controller {

	/**
	 * Check to see if the application is installed
	 * Redirect to the installer if need be
     */
	public function __construct() {
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		javascript()->put([
			'test' => 'it works!'
		]);

		return view('frontend.index');
	}

}

