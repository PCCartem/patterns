<?php

namespace App\Core;


use App\Interfaces\Creator;
use App\Interfaces\Product;

class ConcreteCreator1 extends Creator {

    public function factoryMethod(): Product
    {
        return new ConcreteProduct1();
    }

}