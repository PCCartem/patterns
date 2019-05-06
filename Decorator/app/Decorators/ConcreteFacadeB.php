<?php
namespace App\Decorators;

use App\Core\Facade;

class ConcreteFacadeB extends Facade
{

    public function operation(): string
    {
        return "ConcreteDecoratorB(" . parent::operation() . ")";
    }
}