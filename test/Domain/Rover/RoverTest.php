<?php

declare(strict_types=1);


namespace Test\Domain\Rover;


use PHPUnit\Framework\TestCase;
use StarWars\Domain\Rover\Coordinate;
use StarWars\Domain\Rover\Direction;
use StarWars\Domain\Rover\DirectionEnum;
use StarWars\Domain\Rover\Move;
use StarWars\Domain\Rover\Position;
use StarWars\Domain\Rover\Rover;

class RoverTest extends TestCase
{
    public function testRoverCanMoveForward(): void
    {
        $rover = new Rover(
            new Position(
                new Coordinate(1.0),
                new Coordinate(1.0),
                new Direction(DirectionEnum::N)
            )
        );

        $move = new Move(1.0);
        $rover->moveForward($move);

        $this->assertEquals(1.0, $rover->getPosition()->getX()->getValue());
        $this->assertEquals(2.0, $rover->getPosition()->getY()->getValue());
        $this->assertEquals(DirectionEnum::N, $rover->getPosition()->getDirection()->getDirection());
    }

    public function testRoverCanRotateClockwise(): void
    {
        $rover = new Rover(
            new Position(
                new Coordinate(1.0),
                new Coordinate(1.0),
                new Direction(DirectionEnum::N)
            )
        );

        $rover->rotateR();
        $this->assertEquals(DirectionEnum::E, $rover->getPosition()->getDirection()->getDirection());

        $rover->rotateR();
        $this->assertEquals(DirectionEnum::S, $rover->getPosition()->getDirection()->getDirection());

        $rover->rotateR();
        $this->assertEquals(DirectionEnum::W, $rover->getPosition()->getDirection()->getDirection());

        $rover->rotateR();
        $this->assertEquals(DirectionEnum::N, $rover->getPosition()->getDirection()->getDirection());
    }

    public function testRoverCanBeRotatedCounterClockwise(): void
    {
        $rover = new Rover(
            new Position(
                new Coordinate(1.0),
                new Coordinate(1.0),
                new Direction(DirectionEnum::N)
            )
        );

        $rover->rotateL();
        $this->assertEquals(DirectionEnum::W, $rover->getPosition()->getDirection()->getDirection());

        $rover->rotateL();
        $this->assertEquals(DirectionEnum::S, $rover->getPosition()->getDirection()->getDirection());

        $rover->rotateL();
        $this->assertEquals(DirectionEnum::E, $rover->getPosition()->getDirection()->getDirection());

        $rover->rotateL();
        $this->assertEquals(DirectionEnum::N, $rover->getPosition()->getDirection()->getDirection());
    }

}