<?php

declare(strict_types=1);

namespace StarWars\Domain\Rover;

class Position
{
    public function __construct(
        private readonly Coordinate $x,
        private readonly Coordinate $y,
        private readonly Direction $direction
    ) {
    }

    public function getX(): Coordinate
    {
        return $this->x;
    }

    public function getY(): Coordinate
    {
        return $this->y;
    }

    public function moveForward(Move $move): void
    {
        switch ($this->direction->getDirection()) {
            case DirectionEnum::N:
                $this->y->move($move->getValue());
                break;
            case DirectionEnum::E:
                $this->x->move($move->getValue());
                break;
            case DirectionEnum::S:
                $this->y->move(-$move->getValue());
                break;
            case DirectionEnum::W:
                $this->x->move(-$move->getValue());
                break;
        }
    }

    public function getDirection(): Direction
    {
        return $this->direction;
    }

    public function rotateR(): void
    {
        $this->direction->rotateR();
    }

    public function rotateL(): void
    {
        $this->direction->rotateL();
    }
}