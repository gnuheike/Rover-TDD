<?php

declare(strict_types=1);


namespace StarWars\Application;

use StarWars\Domain\Plateau\Plateau;
use StarWars\Domain\Plateau\RoverOnPlateau;

class Input
{
    /**
     * @param Plateau $plato
     * @param RoverOnPlateau[] $roversInput
     */
    public function __construct(
        public readonly Plateau $plato,
        public readonly array $roversInput,
    ) {
    }
}