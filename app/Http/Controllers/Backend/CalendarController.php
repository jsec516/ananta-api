<?php 

namespace Qclinic\Http\Controllers\Backend;

use Qclinic\Http\Controllers\Controller;

/**
 * Class CalendarController
 * @package App\Http\Controllers\Backend
 */
class CalendarController extends Controller {

	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		return view('backend.calendars.index');
	}
}