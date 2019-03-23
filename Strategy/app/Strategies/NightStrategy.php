<?php
namespace App\Strategies;

use App\Core\Strategy;

class NightStrategy extends Strategy {

    public function sell()
    {
        echo "<p>Night: Water for you!</p>";
    }
}