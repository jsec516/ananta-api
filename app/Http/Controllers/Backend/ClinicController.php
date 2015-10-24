<?php 

namespace Qclinic\Http\Controllers\Backend;

use Qclinic\Http\Controllers\Controller;
use Qclinic\Repositories\Clinic\ClinicRepositoryContract;

/**
 * Class ClinicController
 * @package App\Http\Controllers\Backend
 */
class ClinicController extends Controller {

	protected $repository;

	function __construct(ClinicRepositoryContract $repository) 
	{
		$this->repository = $repository;
	}

	/**
	 * view existing schedule for clinic
	 *
	 * @return \Illuminate\View\View
	 */
	public function getSchedule(Request $request)
	{
		return view('backend.clinic.schedule', [
			'schedule' => $this->repository->getSchedule($request->session()->get('clinicId'))
		]);
	}

	public function postSchedule(Request $request)
	{
		//@TODO: save the schedule
	}
}