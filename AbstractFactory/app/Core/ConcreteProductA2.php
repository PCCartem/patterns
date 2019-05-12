<?php
namespace App\Core;

use App\Interfaces\AbstractProductA;

class ConcreteProductA2 implements AbstractProductA {

    public function usefulFunctionA(): string
    {
        return "The result of the product A2.";
    }
}