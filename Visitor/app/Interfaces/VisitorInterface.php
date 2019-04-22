<?php

namespace App\Interfaces;

use App\Components\ConcreteComponent1;
use App\Components\ConcreteComponent2;

interface VisitorInterface {
    public function visitConcreteComponent1(ConcreteComponent1 $element): void;
    public function visitConcreteComponent2(ConcreteComponent2 $element): void;
}