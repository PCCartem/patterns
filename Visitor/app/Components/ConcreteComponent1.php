<?php

namespace App\Components;

use App\Interfaces\ComponentInterface;
use App\Interfaces\VisitorInterface;

class ConcreteComponent1 implements ComponentInterface {

    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitConcreteComponent1($this);
    }

    public function exclusiveMethodOfConcreteComponent1(): string
    {
        return "A";
    }
}