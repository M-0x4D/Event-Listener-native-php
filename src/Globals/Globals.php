<?php

namespace Eventlistner\Globals;

require_once __DIR__ . "/../../vendor/autoload.php";

use Eventlistner\Events\Event;
use Eventlistner\Providers\EventServiceProvider;

function event(Event $event)
{
    $eventServiceProvider = new EventServiceProvider;
    foreach ($eventServiceProvider->listen as $eventClass => $listeners) {
        $event = new $eventClass($event->counter);
        if (is_array($listeners)) {
            foreach ($listeners as $listenerClass) {
                $listener = new $listenerClass;
                $listener->handle($event);
            }
        } else {
            $listener = new $listeners;
            $listener->handle($event);
        }
    }
}
