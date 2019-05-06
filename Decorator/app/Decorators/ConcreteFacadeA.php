<?php
namespace App\Decorators;

use App\Core\Facade;

class ConcreteFacadeA extends Facade
{

    public function operation(): string
    {
        return "ConcreteDecoratorA(" . parent::operation() . ")";
    }
}