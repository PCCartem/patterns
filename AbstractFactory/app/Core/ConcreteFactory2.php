<?php

namespace App\Core;


use App\Interfaces\AbstractFactory;
use App\Interfaces\AbstractProductA;
use App\Interfaces\AbstractProductB;

class ConcreteFactory2 implements AbstractFactory {

    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2();
    }

}