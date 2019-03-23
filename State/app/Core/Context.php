<?php

namespace App\Core;

use App\Interfaces\ContextInterface;
use App\Interfaces\StateInterface;

class Context implements ContextInterface {

    protected $state;

    public function __construct(StateInterface $state)
    {
        $this->turnState($state);
    }

    public function turnState(StateInterface $state)
    {
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function makeSomeShit()
    {

    }

    public function nextStep()
    {

    }
}