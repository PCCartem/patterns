<?php

namespace App\Core;

use App\Interfaces\Subject;

class RealSubject implements Subject {

    public function request(): void
    {
        echo "RealSubject: Handling request.\n";
    }
}