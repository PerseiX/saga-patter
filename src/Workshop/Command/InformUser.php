<?php

declare(strict_types=1);

namespace Workshop\Command;

class InformUser extends Command
{
    public function __construct(string $processId)
    {
        parent::__construct($processId);
    }
}