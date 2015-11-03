<?php
namespace Qclinic\Accounts\Users;

interface UserCreatorListenerContract
{
	public function userValidationError($errors);
    public function userCreated($user);
}