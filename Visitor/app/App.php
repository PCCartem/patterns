<?php

namespace App;


use App\Components\ConcreteComponent1;
use App\Components\ConcreteComponent2;
use App\Interfaces\VisitorInterface;
use App\Visitors\ConcreteVisitor1;
use App\Visitors\ConcreteVisitor2;

class App
{
    public function run()
    {
        $components = [
            new ConcreteComponent1(),
            new ConcreteComponent2(),
        ];

        echo "The client code works with all visitors via the base Visitor interface:\n";
        $visitor1 = new ConcreteVisitor1();
        $this->use($components, $visitor1);
        echo "\n";

        echo "It allows the same client code to work with different types of visitors:\n";
        $visitor2 = new ConcreteVisitor2();
        $this->use($components, $visitor2);
    }

    public function use($components, VisitorInterface $visitor)
    {
        foreach ($components as $component) {
            $component->accept($visitor);
        }
    }
}