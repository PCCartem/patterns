<?php

namespace App;

use App\Commands\OrderCommand;
use App\Commands\RegistrationCommand;
use App\Commands\SimpleCommand;
use App\Receivers\EmailReceiver;
use App\Senders\GeneralSender;

class App
{
    public function run()
    {
        $sender = new GeneralSender();
        $receiver = new EmailReceiver();


        $sender->setCommand(new SimpleCommand());
        echo $sender->sendCommand();


        $sender->setCommand(new RegistrationCommand($receiver,['name' => 'mrArtem']));
        echo $sender->sendCommand();

        $sender->setCommand(new OrderCommand($receiver, ['product' => 'SuperProduct', 'price' => '1000$']));
        echo $sender->sendCommand();
    }
}