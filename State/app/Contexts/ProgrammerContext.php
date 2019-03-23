<?php

namespace App\Contexts;

use App\Core\Context;

class ProgrammerContext extends Context {

    public function makeSomeShit()
    {
        $this->state->makeGeneralSomething();
    }

    public function nextStep()
    {
        $this->state->continueToLive();
    }
}