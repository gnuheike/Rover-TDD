<?php

declare(strict_types=1);

namespace StarWars\Domain\Plateau;

class Plateau
{
    public function __construct(
        public readonly int $maxX,
        public readonly int $maxY
    ) {
    }
}