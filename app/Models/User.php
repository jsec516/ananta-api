<?php

# app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model  
{
	/**
	 * Get the post that owns the comment.
	 */
	public function clinic()
	{
		return $this->belongsTo('App\Models\Clinic');
	}
}