<?php

namespace App\Core;

class ExtendAbstraction extends Abstraction {

    public function operation(): string
    {
        return "ExtendedAbstraction: Extended operation with:\n" .
            $this->implementation->operationImplementation();
    }
    
}