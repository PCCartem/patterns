<?php

namespace App\Components;

use App\Interfaces\ComponentInterface;
use App\Interfaces\VisitorInterface;

class ConcreteComponent2 implements ComponentInterface {

    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitConcreteComponent2($this);
    }

    public function specialMethodOfConcreteComponent2(): string
    {
        return "B";
    }
}