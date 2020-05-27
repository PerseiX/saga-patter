<?php

declare(strict_types=1);


namespace Workshop;


class ProcessData
{
    /** @var int */
    private $id;

    /** @var string */
    private $state;

    /** @var string */
    private $status;

    /** @var string */
    private $name;

    /**
     * ProcessData constructor.
     * @param int $id
     * @param string $state
     * @param string $status
     * @param string $name
     */
    public function __construct(int $id, string $state, string $status, string $name)
    {
        $this->id = $id;
        $this->state = $state;
        $this->status = $status;
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}