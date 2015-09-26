<?php

namespace Qclinic\Models;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
	public $timestamps = false;
	protected $fillable = ['name'];
}
