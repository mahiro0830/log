<?php
require_once dirname( __FILE__ ) . '/interface2/Flyable.php';
require_once dirname( __FILE__ ) . '/interface2/Walkable.php';

/**
 * 鳥
 */
class Bird implements Flyable, Walkable
{
    public function fly() : void
    {

    }

    public function walk() : void
    {

    }
}
