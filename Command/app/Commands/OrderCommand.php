<?php
namespace App\Commands;

use App\Core\Command;
use App\Receivers\EmailReceiver;

class OrderCommand extends Command {

    private $product;
    private $price;
    private $receiver;

    public function __construct(EmailReceiver $receiver, array $data)
    {
        $this->price = $data['price'];
        $this->product = $data['product'];
        $this->receiver = $receiver;
    }

    public function execute()
    {
        return $this->receiver->sendEmail("Send email for User. User send new order! Product is - ".$this->product." price is - ".$this->price);
    }

}