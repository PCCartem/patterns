<?php
namespace App\Senders;

use App\Core\Sender;
use App\Interfaces\CommandInterface;

class GeneralSender extends Sender {

    private $command;

    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function sendCommand()
    {
        return $this->command->execute();
    }

}