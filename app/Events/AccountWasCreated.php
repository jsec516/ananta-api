<?php

namespace Qclinic\Events;

use Qclinic\Events\Event;
use Illuminate\Queue\SerializesModels;
use Qclinic\Accounts\Users\Account;

class AccountWasCreated extends Event
{
    use SerializesModels;

    public $account;

    /**
     * Create a new event instance.
     *
     * @param  Account  $account
     * @return void
     */
    public function __construct(Account $account)
    {
        $this->account = $account;
    }


}