<?php

namespace Qclinic\Models;

use Illuminate\Database\Eloquent\Model;
use Qclinic\Repositories\Schedule\SchedulableContract;

class Schedule extends Model implements SchedulableContract
{
}
