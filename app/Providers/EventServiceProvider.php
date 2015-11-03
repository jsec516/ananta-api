<?php

namespace Qclinic\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Qclinic\Events\UserWasCreated' => [
            'Qclinic\Listeners\UserCreatedConfirmation',
        ],
        'Qclinic\Events\AccountWasCreated' => [
            'Qclinic\Listeners\AccountCreatedConfirmation',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
