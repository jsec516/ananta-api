<?php

namespace Qclinic\Events;

use Qclinic\Events\Event;
use Illuminate\Queue\SerializesModels;
use Qclinic\Accounts\Users\User;

class UserWasCreated extends Event
{
    use SerializesModels;

    public $user;

    /**
     * Create a new event instance.
     *
     * @param  Mailer  $user
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }


}