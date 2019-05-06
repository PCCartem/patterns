<?php
namespace App\Decorators;

use App\Core\Decorator;

class ConcreteDecoratorB extends Decorator
{

    public function operation(): string
    {
        return "ConcreteDecoratorB(" . parent::operation() . ")";
    }
}