<?php

namespace Test\Domain\Rover;

use PHPUnit\Framework\TestCase;
use StarWars\Domain\Rover\Direction;
use StarWars\Domain\Rover\DirectionEnum;

class DirectionTest extends TestCase
{
    public function testCanBeRotatedClockWise(): void
    {
        $direction = new Direction(DirectionEnum::N);
        $expectedRotationChain = [
            DirectionEnum::E,
            DirectionEnum::S,
            DirectionEnum::W,
            DirectionEnum::N,
        ];

        foreach ($expectedRotationChain as $expectedDirection) {
            $direction->rotateR();
            $this->assertEquals($expectedDirection, $direction->getDirection());
        }
    }

    public function testCanBeRotatedCounterClockWise(): void
    {
        $direction = new Direction(DirectionEnum::N);
        $expectedRotationChain = [
            DirectionEnum::W,
            DirectionEnum::S,
            DirectionEnum::E,
            DirectionEnum::N,
        ];

        foreach ($expectedRotationChain as $expectedDirection) {
            $direction->rotateL();
            $this->assertEquals($expectedDirection, $direction->getDirection());
        }
    }
}
