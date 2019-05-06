<?php
namespace App\Decorators;

use App\Core\Decorator;

class ConcreteDecoratorA extends Decorator
{

    public function operation(): string
    {
        return "ConcreteDecoratorA(" . parent::operation() . ")";
    }
}