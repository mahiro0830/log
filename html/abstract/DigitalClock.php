<?php
require_once dirname( __FILE__ ) . '/Clock.php';

class DigitalClock extends Clock
{
    public function show() :string
    {
        return date( 'H:i', $this->time );
    }
}
