<?php

namespace App\States;

use App\Core\State;

class SleepState extends State {

    public function makeGeneralSomething()
    {
        echo "<p>*Snore*</p>";
    }

    public function continueToLive()
    {
        $this->context->turnState(new WorkState());
    }

}