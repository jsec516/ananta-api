<?php

# app/Models/Country.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model  
{
	/**
	 * Get the users for the clinic
	 */
	public function users()
	{
		return $this->hasMany('App\Models\User');
	}
}