<?php

namespace App;

use App\Core\ConcreteComponent;
use App\Decorators\ConcreteFacadeA;
use App\Decorators\ConcreteFacadeB;


class App
{
    public function run()
    {
        $simple = new ConcreteComponent();
        echo $simple->operation();

        echo "<br>";

        $decorator1 = new ConcreteFacadeA($simple);
        $decorator2 = new ConcreteFacadeB($decorator1);
        echo $decorator2->operation();
    }


}