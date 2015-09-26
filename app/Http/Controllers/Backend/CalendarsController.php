<?php 

namespace Qclinic\Http\Controllers\Backend;

use Qclinic\Http\Controllers\Controller;

/**
 * Class DashboardController
 * @package App\Http\Controllers\Backend
 */
class CalendarsController extends Controller {

	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		return view('backend.calendars.index');
	}
}