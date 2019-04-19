<?php

namespace App\Components;

class ConcreteComponent extends Component{

    public function doA(): bool
    {
        $this->mediator->notify($this, 'A');
        return true;
    }


}