<?php

namespace App\Mediators;

use \App\Interfaces\MediatorInterface;

class ConcreteMediator implements MediatorInterface {

    protected $c1;
    protected $c2;

    public function __construct($c1, $c2)
    {
        $this->c1 = $c1;
        $this->c1->setMediator($this);
        $this->c2 = $c2;
        $this->c2->setMediator($this);
    }

    public function notify(object $sender, string $event)
    {
        if($event === 'A') {
            $this->c2->doB();
        }
    }

}