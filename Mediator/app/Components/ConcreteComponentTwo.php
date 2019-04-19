<?php

namespace App\Components;


class ConcreteComponentTwo extends Component {

    public function doB(): bool
    {
        $this->mediator->notify($this, 'B');
        echo "Simple ex for mediator";
        return true;
    }

}