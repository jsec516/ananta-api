<?php

namespace Qclinic\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
	public $timestamps = false;
	
	public function getName() 
    {
        return $this->name;
    }   
}
