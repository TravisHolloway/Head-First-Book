<?php

namespace Strategy;

class FirstDuck extends Duck
{
    public function display()
    {
        echo static::class . ' Display' . PHP_EOL;
    }
}