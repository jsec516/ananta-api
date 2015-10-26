<?php

namespace Qclinic\Repositories\Clinic;

use ClinicRepositoryContract;
use Qclinic\Repositories\Schedule\ScheduleRepositoryContract;

class EloquentClinicRepository implements ClinicRepositoryContract
{

	private $scheduleRepository;

	function __construct(ScheduleRepositoryContract $scheduleRepository) 
	{
		$this->scheduleRepository = $scheduleRepository;
	}

	public function findOrThrowException($id, $withSchedule = false) 
	{

	}

	/**
     * get schedule of clinic
     *
     * @param  integer $identifier
     * @return mixed
     */
    public function findSchedule($ownerId)
    {
    	// find associated schedule
    }

    /**
     * save schedule of clinic
     *
     * @param  integer $identifier
     * @return mixed
     */
    public function saveSchedule($ownerId)
    {
        // save associated schedule
    }

}