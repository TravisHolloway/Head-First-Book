<?php

namespace Strategy;

class SecondDuck extends Duck
{
    public function display()
    {
        echo static::class . ' Display' . PHP_EOL;
    }
}