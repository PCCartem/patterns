<?php

namespace App\Interfaces;

interface ComponentInterface {
    public function accept(VisitorInterface $visitor): void;
}