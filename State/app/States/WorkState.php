<?php

namespace App\States;

use App\Core\State;

class WorkState extends State {

    public function makeGeneralSomething()
    {
        echo "<p>*Sounds of working the brain*</p>";
    }

    public function continueToLive()
    {
        $this->context->turnState(new RelaxState());
    }

}