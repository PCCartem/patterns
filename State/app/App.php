<?php

namespace App;


use App\Contexts\ProgrammerContext;
use App\States\SleepState;

class App
{
    public function run()
    {
        $mrArtem = new ProgrammerContext(new SleepState());

        $mrArtem->makeSomeShit();
        $mrArtem->nextStep();

        $mrArtem->makeSomeShit();
        $mrArtem->nextStep();

        $mrArtem->makeSomeShit();
        $mrArtem->nextStep();

        $mrArtem->makeSomeShit();
        $mrArtem->nextStep();
    }
}