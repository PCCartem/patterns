<?php
namespace App\Strategies;

use App\Core\Strategy;

class DayStrategy extends Strategy {

    public function sell()
    {
        echo "<p>Day: Bear for you!</p>";
    }

}