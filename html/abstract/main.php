<?php
require_once dirname( __FILE__ ) . '/DigitalClock.php';
require_once dirname( __FILE__ ) . '/AnalogClock.php';

$currentTime = strtotime( '2023-08-22 17:15' );
$digitalClock = new DigitalClock();
$digitalClock->setTime( $currentTime );
echo $digitalClock->show() . '<br />';

$analogClock = new AnalogClock();
echo $analogClock->show() . '<br />';
