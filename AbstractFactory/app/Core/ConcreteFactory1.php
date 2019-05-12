<?php

namespace App\Core;


use App\Interfaces\AbstractFactory;
use App\Interfaces\AbstractProductA;
use App\Interfaces\AbstractProductB;

class ConcreteFactory1 implements AbstractFactory {

    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1;
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1;
    }

}