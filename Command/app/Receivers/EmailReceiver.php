<?php
namespace App\Receivers;

use App\Core\Receiver;

class EmailReceiver extends Receiver {

    public function sendEmail(string $message)
    {
        return $message;
    }

}