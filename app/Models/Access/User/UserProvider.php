<?php 

namespace Qclinic\Models\Access\User;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserProvider
 * @package Qclinic
 */
class UserProvider extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_providers';

	/**
	 * The attributes that are not mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = ['id'];
}