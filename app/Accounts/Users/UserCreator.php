<?php
namespace Qclinic\Accounts\Users;

use Event;
use Qclinic\Events\UserWasCreated;
use Illuminate\Support\Str;


class UserCreator
{
	/**
     * @var \Qclinic\Accounts\Users\UserRepository
     */
	protected $users;

	function __construct(UserRepositoryContract $users) {
		$this->users = $users;
	}

	public function create(UserCreatorListenerContract $listener, $input, $validator = null)
	{
		// check the passed in validator
        if ($validator && $validator->fails()) {
            return $listener->userValidationError($validator->errors());
        }

        return $this->createValidUserRecord($listener, $input);
	}

	private function createValidUserRecord($listener, $input)
	{
		$user = $this->users->getNew($input);

		// Set a confirmation code for the user. He'll need to verify his email address
        // with this code before he can use certain sections on the website.
        $confirmationCode = Str::random(30);

        // We'll generate a new one if we find a user with the same code.
        while ($this->users->getByConfirmationCode($confirmationCode) !== null) {
            $confirmationCode = Str::random(30);
        }
        $user->confirmation_code = $confirmationCode;

		// check the model validation
        if (! $this->users->save($user)) {
            return $listener->userValidationError($user->getErrors());
        }
		// fire send confirmation email
		Event::fire(new UserWasCreated($user));

		return $listener->userCreated($user);
	}

}