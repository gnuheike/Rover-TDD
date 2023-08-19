<?php

declare(strict_types=1);


namespace StarWars\Domain\Rover;

class Coordinate
{
    public function __construct(private float $value)
    {
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function move(float $param): void
    {
        $this->value += $param;
    }
}