<?php
namespace App\Core;

use App\Interfaces\AbstractProductA;

class ConcreteProductA1 implements AbstractProductA {

    public function usefulFunctionA(): string
    {
        return "The result of the product A1.";
    }
}