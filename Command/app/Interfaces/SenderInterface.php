<?php

namespace App\Interfaces;

interface SenderInterface
{
    public function sendCommand();
    public function setCommand(CommandInterface $command);
}