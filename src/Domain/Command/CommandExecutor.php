<?php

declare(strict_types=1);


namespace StarWars\Domain\Command;

use StarWars\Domain\Rover\Position;

class CommandExecutor
{
    public function execute(Position $position, CommandEnum $command): Position
    {
    }
}