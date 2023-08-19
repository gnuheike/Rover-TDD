<?php

namespace Test\Domain\Rover;

use PHPUnit\Framework\TestCase;
use StarWars\Domain\Rover\Coordinate;

class CoordinateTest extends TestCase
{
    public function testCoordinateCanBeMoved(): void
    {
        $coordinate = new Coordinate(1.0);
        $coordinate->move(1.0);
        $this->assertEquals(2.0, $coordinate->getValue());
    }
}
