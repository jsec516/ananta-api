<?php

namespace Qclinic\Listeners;

use Qclinic\Events\AccountWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Mail\Mailer;

class AccountCreatedConfirmation
{

    protected $mailer;

    /**
     * Create the event listener.
     * @param  Mailer  $mailer
     * @return void
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  AccountWasCreated  $event
     * @return void
     */
    public function handle(AccountWasCreated $event)
    {
        // Access the podcast using $event->account...
    }
}