<?php
namespace App\Commands;

use App\Core\Command;
use App\Receivers\EmailReceiver;

class RegistrationCommand extends Command {

    private $name;
    private $receiver;

    public function __construct(EmailReceiver $receiver, $data)
    {
        $this->name = $data['name'];
        $this->receiver = $receiver;
    }

    public function execute()
    {
        return $this->receiver->sendEmail("Send email for new User. User's name is ".$this->name);
    }

}