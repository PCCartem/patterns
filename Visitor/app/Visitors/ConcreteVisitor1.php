<?php

namespace App\Visitors;

use App\Components\ConcreteComponent1;
use App\Components\ConcreteComponent2;
use App\Interfaces\VisitorInterface;

class ConcreteVisitor1 implements VisitorInterface {
    public function visitConcreteComponent1(ConcreteComponent1 $element): void
    {
        echo $element->exclusiveMethodOfConcreteComponent1() . " + ConcreteVisitor1\n";
    }

    public function visitConcreteComponent2(ConcreteComponent2 $element): void
    {
        echo $element->specialMethodOfConcreteComponent2() . " + ConcreteVisitor1\n";
    }
}