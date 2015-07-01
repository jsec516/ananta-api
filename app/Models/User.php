<?php

# app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model  
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['first_name','last_name','email','password','security_answer','security_question_id','clinic_id','clinic_user_id'];
	
	/**
	 * Get the post that owns the comment.
	 */
	public function clinic()
	{
		return $this->belongsTo('App\Models\Clinic');
	}
}