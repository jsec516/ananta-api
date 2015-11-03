<?php
namespace Qclinic\Accounts\Users;

interface UserRepositoryContract
{
	public function save();
	public function getNew($input);
	public function getByConfirmationCode($confirmationCode);
}