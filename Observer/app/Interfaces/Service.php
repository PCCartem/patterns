<?php

namespace App\Interfaces;

interface Service {
    public function registerObserver($observer);
    public function notifyObservers();
}