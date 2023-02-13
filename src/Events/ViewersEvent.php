<?php
 
 namespace Eventlistner\Events;

class ViewersEvent implements Event
{
  
    public $counter;

	public function __construct($counter) {
        $this->counter = $counter;
	}
}