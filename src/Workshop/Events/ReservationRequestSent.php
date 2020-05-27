<?php

declare(strict_types=1);

namespace Workshop\Events;


class ReservationRequestSent extends Event
{
    public const NAME = 'reservation_request_sent';

    /**
     * Reserved constructor.
     * @param string $processId
     */
    public function __construct(string $processId)
    {
        parent::__construct($processId);
    }
}