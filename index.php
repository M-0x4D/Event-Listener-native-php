<?php
session_start();
require_once __DIR__ ."/vendor/autoload.php";
require_once __DIR__ . "/src/Globals/Globals.php";

use Eventlistner\Events\ViewersEvent;
use function Eventlistner\Globals\event;

$_SESSION['visit'] += 1; //set session variable

//Check if session is set
if(isset($_SESSION['visit'])){
echo "You visited this page ";
event(new ViewersEvent($_SESSION['visit']));
echo " times";
}
