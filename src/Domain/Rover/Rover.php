<?php

declare(strict_types=1);

namespace StarWars\Domain\Rover;

class Rover
{
    public function __construct(
        private readonly Position $position,
    ) {
    }

    public function moveForward(Move $move): void
    {
        $this->position->moveForward($move);
    }

    public function getPosition(): Position
    {
        return $this->position;
    }

    public function rotateR(): void
    {
        $this->position->rotateR();
    }

    public function rotateL(): void
    {
        $this->position->rotateL();
    }
}