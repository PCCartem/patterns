<?php

namespace App;

use App\Core\Proxy;
use App\Core\RealSubject;


class App
{
    public function run()
    {
        $realSubject = new RealSubject();
        echo $realSubject->request();

        $proxy = new Proxy($realSubject);
        echo $proxy->request();
    }


}