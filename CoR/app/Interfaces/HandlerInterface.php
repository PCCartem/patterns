<?php

namespace App\Interfaces;

interface HandlerInterface
{
    public function setNext(HandlerInterface $handler): HandlerInterface;

    public function handle(string $request): ?string;
}