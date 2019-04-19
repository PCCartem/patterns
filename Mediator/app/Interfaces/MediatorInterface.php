<?php

namespace App\Interfaces;


interface MediatorInterface {
    public function notify(object $sender, string $event);
}