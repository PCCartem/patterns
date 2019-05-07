<?php

namespace App\Core;

use App\Interfaces\Product;

class ConcreteProduct1 implements Product {

    public function operation(): string
    {
        return "{Result of the ConcreteProduct1}";
    }
}