<?php

namespace App;




use App\Core\ConcreteCreator1;
use App\Core\ConcreteCreator2;

class App
{
    public function run()
    {

        $creator = new ConcreteCreator1();
        echo "Client: I'm not aware of the creator's class, but it still works.\n"
            . $creator->someOperation();
        $creator = new ConcreteCreator2();
        echo "Client: I'm not aware of the creator's class, but it still works.\n"
            . $creator->someOperation();
        
    }


}