<?php

declare(strict_types=1);


namespace StarWars\Domain\Rover;

class Direction
{
    private const ROTATION_CHAIN = [
        DirectionEnum::N,
        DirectionEnum::E,
        DirectionEnum::S,
        DirectionEnum::W,
    ];

    public function __construct(private DirectionEnum $direction)
    {
    }

    public function getDirection(): DirectionEnum
    {
        return $this->direction;
    }

    public function rotateR(): void
    {
        $this->rotate(1);
    }

    private function rotate(int $count): void
    {
        $position = array_search($this->direction, self::ROTATION_CHAIN, true);
        $position += $count;

        if (!isset(self::ROTATION_CHAIN[$position])) {
            if ($count > 0) {
                $position -= count(self::ROTATION_CHAIN);
            } else {
                $position += count(self::ROTATION_CHAIN);
            }
        }
        $this->direction = self::ROTATION_CHAIN[$position];
    }

    public function rotateL(): void
    {
        $this->rotate(-1);
    }
}