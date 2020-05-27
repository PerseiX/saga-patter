<?php

namespace Workshop\Command;

class Command
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $processId;

    public function __construct(string $processId)
    {
        $this->processId = $processId;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getProcessId(): string
    {
        return $this->processId;
    }
}