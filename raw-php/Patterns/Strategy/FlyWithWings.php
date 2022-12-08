<?php

namespace Strategy;

use Strategy\Flyable;

class FlyWithWings implements Flyable
{
    public function fly()
    {
        echo static::class . PHP_EOL;
    }
}