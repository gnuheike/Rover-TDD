<?php

declare(strict_types=1);

namespace StarWars\Domain\Plateau;

use StarWars\Domain\Command\CommandChain;
use StarWars\Domain\Rover\Position;

class RoverOnPlateau
{
    public function __construct(
        public readonly Position $position,
        public readonly CommandChain $commands
    ) {
    }
}