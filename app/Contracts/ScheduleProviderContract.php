<?php

namespace Qclinic\Contracts;

interface ScheduleProviderContract{
	public function get($ownerId);
}