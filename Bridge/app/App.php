<?php

namespace App;

use App\Components\ConcreteImplementationA;
use App\Components\ConcreteImplementationB;
use App\Core\Abstraction;
use App\Core\ExtendAbstraction;


class App
{
    public function run()
    {
        $implementation = new ConcreteImplementationA;
        $abstraction = new Abstraction($implementation);
        echo $abstraction->operation();


        $implementation = new ConcreteImplementationB;
        $abstraction = new ExtendAbstraction($implementation);
        echo $abstraction->operation();
    }


}