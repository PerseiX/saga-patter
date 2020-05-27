<?php

declare(strict_types=1);

namespace Workshop\Events;

class ReservationFailed extends Event
{
    public const NAME = 'reserved_failed';

    /**
     * ReservationFailed constructor.
     */
    public function __construct(string $processId)
    {
        parent::__construct($processId);
    }


}