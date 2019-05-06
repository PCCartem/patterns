<?php

namespace App\Components;

use App\Core\Implementation;

class ConcreteImplementationA implements Implementation {
    public function operationImplementation(): string
    {
        return "ConcreteImplementationA: Here's the result on the platform A.\n";
    }
}