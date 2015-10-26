<?php 

namespace Qclinic\Events\Frontend\Auth;

use Qclinic\Events\Event;
use Illuminate\Queue\SerializesModels;

/**
 * Class UserLoggedIn
 * @package Qclinic\Events\Frontend\Auth
 */
class UserLoggedIn extends Event {

	use SerializesModels;

	/**
	 * @var $user
	 */
	public $user;

	/**
	 * @param $user
	 */
	public function __construct($user)
	{
		$this->user = $user;
	}
}