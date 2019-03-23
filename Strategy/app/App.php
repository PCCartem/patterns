<?php

namespace App;


use App\Contexts\SellerContext;
use App\Strategies\DayStrategy;
use App\Strategies\NightStrategy;

class App
{
    public function run()
    {
        $seller = new SellerContext(new DayStrategy());
        $seller->executeStrategy();

        $seller->setStrategy(new NightStrategy());
        $seller->executeStrategy();
    }
}