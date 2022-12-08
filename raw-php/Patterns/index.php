<?php

spl_autoload_register(function ($className) {
    $fileName = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
    if (is_file($fileName)) {
        include_once $fileName;
    }
});

$duck1 = new \Strategy\FirstDuck(new \Strategy\FlyWithWings());
//$duck1->setFlyingBehaviour(new \Strategy\FlyWithWings());
$duck1->performFly();

$duck2 = new \Strategy\SecondDuck(new \Strategy\FlyNoWay());
//$duck2->setFlyingBehaviour(new \Strategy\FlyNoWay());
$duck2->performFly();