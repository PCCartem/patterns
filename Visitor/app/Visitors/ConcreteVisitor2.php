<?php

namespace App\Visitors;

use App\Components\ConcreteComponent1;
use App\Components\ConcreteComponent2;
use App\Interfaces\VisitorInterface;

class ConcreteVisitor2 implements VisitorInterface {
    public function visitConcreteComponent1(ConcreteComponent1 $element): void
    {
        echo $element->exclusiveMethodOfConcreteComponent1() . " + ConcreteVisitor2\n";
    }

    public function visitConcreteComponent2(ConcreteComponent2 $element): void
    {
        echo $element->specialMethodOfConcreteComponent2() . " + ConcreteVisitor2\n";
    }
}