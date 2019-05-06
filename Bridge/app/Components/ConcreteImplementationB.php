<?php

namespace App\Components;

use App\Core\Implementation;

class ConcreteImplementationB implements Implementation {
    public function operationImplementation(): string
    {
        return "ConcreteImplementationB: Here's the result on the platform B.\n";
    }
}