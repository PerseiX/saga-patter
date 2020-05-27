<?php

declare(strict_types=1);

namespace Workshop\Command;

class Reserve extends Command
{
    public function __construct(string $processId)
    {
        parent::__construct($processId);
    }
}