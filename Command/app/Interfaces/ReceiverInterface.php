<?php

namespace App\Interfaces;

interface ReceiverInterface
{
    public function sendEmail(string $message);
}