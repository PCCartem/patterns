<?php

namespace App;


use App\Components\Component;
use App\Components\Russian;
use App\Components\RussianButAngry;


class App
{
    public function run()
    {
        $man = new Russian();
        echo $man->request();

        echo "<br>";

        $angryMan = new RussianButAngry(new Component());
        echo $angryMan->request();
    }


}