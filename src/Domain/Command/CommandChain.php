<?php

declare(strict_types=1);

namespace StarWars\Domain\Command;

class CommandChain
{
    /**
     * @param CommandEnum[] $commands
     */
    public function __construct(public readonly array $commands)
    {
    }
}