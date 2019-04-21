<?php

namespace App;

use App\Handlers\MonkeyHandler;
use App\Handlers\DogHandler;
use App\Interfaces\HandlerInterface;

class App
{
    public function run()
    {
        $monkey = new MonkeyHandler;
        $dog = new DogHandler;

        $monkey->setNext($dog);
        $this->check($monkey);
    }


    public function check(HandlerInterface $handler)
    {
        foreach (["MeatBall", "Banana", "Cup of coffee"] as $food) {
            echo "Client: Who wants a " . $food . "?\n";
            $result = $handler->handle($food);
            if ($result) {
                echo "  " . $result;
            } else {
                echo "  " . $food . " was left untouched.\n";
            }
        }
    }
}