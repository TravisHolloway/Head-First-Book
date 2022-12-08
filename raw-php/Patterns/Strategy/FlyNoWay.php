<?php

namespace Strategy;

use Strategy\Flyable;

class FlyNoWay implements Flyable
{
    public function fly()
    {
        echo static::class . PHP_EOL;
    }
}