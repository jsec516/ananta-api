<?php

namespace Qclinic\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	public $timestamps = false;
    protected $visible = ['id', 'name'];
    
    public function getName() 
    {
        return $this->name;
    }
}
