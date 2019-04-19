<?php

namespace App;

use App\Components\ConcreteComponent;
use App\Components\ConcreteComponentTwo;
use App\Mediators\ConcreteMediator;

class App
{
    public function run()
    {
        $c1 = new ConcreteComponent();
        $c2 = new ConcreteComponentTwo();
        $mediator = new ConcreteMediator($c1, $c2);

        $c1->doA();
    }
}