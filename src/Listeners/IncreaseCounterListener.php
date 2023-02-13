<?php

namespace Eventlistner\Listeners;

use Eventlistner\Events\Event;
use Eventlistner\Events\ViewersEvent;

class IncreaseCounterListener
{

	public function __construct() {
	}
	

	public function handle($event) {
        // $event->counter++;
        echo $event->counter;
	}
}