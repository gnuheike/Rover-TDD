<?php

namespace Test\Domain\Rover;

use PHPUnit\Framework\TestCase;
use StarWars\Domain\Rover\Coordinate;
use StarWars\Domain\Rover\Direction;
use StarWars\Domain\Rover\DirectionEnum;
use StarWars\Domain\Rover\Move;
use StarWars\Domain\Rover\Position;

class PositionTest extends TestCase
{
    public function testPositionCanBeMovedForward(): void
    {
        $position = new Position(
            new Coordinate(1.0),
            new Coordinate(1.0),
            new Direction(DirectionEnum::N)
        );

        $move = new Move(1.0);
        $position->moveForward($move);

        $this->assertSame(1.0, $position->getX()->getValue());
        $this->assertSame(2.0, $position->getY()->getValue());
        $this->assertSame(DirectionEnum::N, $position->getDirection()->getDirection());
    }

    public function testPositionCanBeRotatedClockwise(): void
    {
        $position = new Position(
            new Coordinate(1.0),
            new Coordinate(1.0),
            new Direction(DirectionEnum::N)
        );

        $position->rotateR();
        $this->assertSame(DirectionEnum::E, $position->getDirection()->getDirection());

        $position->rotateR();
        $this->assertSame(DirectionEnum::S, $position->getDirection()->getDirection());

        $position->rotateR();
        $this->assertSame(DirectionEnum::W, $position->getDirection()->getDirection());

        $position->rotateR();
        $this->assertSame(DirectionEnum::N, $position->getDirection()->getDirection());
    }

    public function testPositionCanBeRotatedCounterClockwise(): void
    {
        $position = new Position(
            new Coordinate(1.0),
            new Coordinate(1.0),
            new Direction(DirectionEnum::N)
        );

        $position->rotateL();
        $this->assertSame(DirectionEnum::W, $position->getDirection()->getDirection());

        $position->rotateL();
        $this->assertSame(DirectionEnum::S, $position->getDirection()->getDirection());

        $position->rotateL();
        $this->assertSame(DirectionEnum::E, $position->getDirection()->getDirection());

        $position->rotateL();
        $this->assertSame(DirectionEnum::N, $position->getDirection()->getDirection());
    }
}
