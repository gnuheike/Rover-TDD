<?php

declare(strict_types=1);


namespace StarWars\Application;

use StarWars\Domain\Rover\Rover;

class Output
{
    /**
     * @param Rover[] $rovers
     */
    public function __construct(
        public readonly array $rovers
    ) {
    }
}