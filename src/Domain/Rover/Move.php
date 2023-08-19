<?php

declare(strict_types=1);


namespace StarWars\Domain\Rover;

class Move
{
    public function __construct(private readonly float $value)
    {
    }

    public function getValue(): float
    {
        return $this->value;
    }
}