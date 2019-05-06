<?php

namespace App;

use App\Core\ConcreteComponent;
use App\Decorators\ConcreteDecoratorA;
use App\Decorators\ConcreteDecoratorB;


class App
{
    public function run()
    {
        $simple = new ConcreteComponent();
        echo $simple->operation();

        echo "<br>";

        $decorator1 = new ConcreteDecoratorA($simple);
        $decorator2 = new ConcreteDecoratorB($decorator1);
        echo $decorator2->operation();
    }


}