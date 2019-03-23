<?php

namespace App\States;

use App\Core\State;

class RelaxState extends State {

    public function makeGeneralSomething()
    {
        echo "<p>Yeah! I am feel good and happy :)</p>";
    }

    public function continueToLive()
    {
        $this->context->turnState(new SleepState());
    }

}