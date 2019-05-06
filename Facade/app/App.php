<?php

namespace App;

use App\Core\Facade;
use App\Core\Subsystem1;
use App\Core\Subsystem2;


class App
{
    public function run()
    {
        $subsystem1 = new Subsystem1();
        $subsystem2 = new Subsystem2();
        $facade = new Facade($subsystem1, $subsystem2);

        echo $facade->operation();
    }

}