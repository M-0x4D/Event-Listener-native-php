<?php
namespace Eventlistner\Events;

/**
 * @property $counter
 */
 interface Event
{
    function __construct($counter);
}