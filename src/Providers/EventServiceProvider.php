<?php

namespace Eventlistner\Providers;

use Eventlistner\Events\ViewersEvent;
use Eventlistner\Listeners\IncreaseCounterListener;

class EventServiceProvider extends ServiceProvider
{
    // register events and listeners
    public $listen = [
        ViewersEvent::class => [
            IncreaseCounterListener::class
            ]
    ];
}