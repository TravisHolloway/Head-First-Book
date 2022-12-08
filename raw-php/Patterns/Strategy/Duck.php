<?php

namespace Strategy;

abstract class Duck
{
    /** @var Flyable */
    private $flyingBehaviour;

    /**
     * @param Flyable $flyingBehaviour
     */
    public function __construct(Flyable $flyingBehaviour)
    {
        $this->flyingBehaviour = $flyingBehaviour;
    }

    abstract public function display();



    /**
     * @param Flyable $flyingBehaviour
     */
    public function setFlyingBehaviour(Flyable $flyingBehaviour): void
    {
        $this->flyingBehaviour = $flyingBehaviour;
    }

    public function performFly()
    {
        $this->flyingBehaviour->fly();
    }
}
