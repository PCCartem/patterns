<?php

namespace App\Components;

use App\Interfaces\MediatorInterface;

class Component {

    protected $mediator;

    public function setMediator(MediatorInterface $mediaor)
    {
        $this->mediator = $mediaor;
    }


}