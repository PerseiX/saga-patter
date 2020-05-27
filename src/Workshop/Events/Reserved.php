<?php

declare(strict_types=1);

namespace Workshop\Events;


class Reserved extends Event
{
    public const NAME = 'reserved';

    /**
     * Reserved constructor.
     * @param string $processId
     */
    public function __construct(string $processId)
    {
        parent::__construct($processId);
    }
}