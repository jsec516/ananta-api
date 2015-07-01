<?php

# app/Models/Country.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model  
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name','email','subdomain','country_id','city_id','address'];
	/**
	 * Get the users for the clinic
	 */
	public function users()
	{
		return $this->hasMany('App\Models\User');
	}
}