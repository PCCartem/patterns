<?php
namespace App\Core;

use App\Interfaces\ContextInterface;
use App\Interfaces\StateInterface;

class State implements StateInterface {

    protected $context;

    public function setContext(ContextInterface $context)
    {
        $this->context = $context;
    }
}