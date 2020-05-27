<?php

declare(strict_types=1);

namespace Workshop\Command;

class UnlockAvailability extends Command
{
    /** @var int */
    private $lockId;

    /**
     * UnlockAvailability constructor.
     *
     * @param string $processId
     * @param int $lockId
     */
    public function __construct(string $processId, int $lockId)
    {
        parent::__construct($processId);
        $this->lockId = $lockId;
    }

    /**
     * @return int
     */
    public function getLockId(): int
    {
        return $this->lockId;
    }
}