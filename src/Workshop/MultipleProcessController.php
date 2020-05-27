<?php

namespace Workshop;

use Workshop\Events\Event;

class MultipleProcessController
{
    /**
     * @var ProcessRepository
     */
    private $processes;

    /**
     * @var CommandBus
     */
    private $bus;

    /**
     * MultipleProcessController constructor.
     * @param ProcessRepository $processes
     * @param CommandBus $bus
     */
    public function __construct(ProcessRepository $processes, CommandBus $bus)
    {
        $this->processes = $processes;
        $this->bus = $bus;
    }

    public function handle(Event $event): void
    {
        $processData = $this->processes->get($event->getProcessId());
        // Czy istnieje tylko 1 proces i "podmieniamy" mu state?


        /** @var Process $process */
        $processName = $processData->getName();
        $process = new $processName($this->bus);

        $state = $process->handle($event, unserialize($processData->getState(), State::class));
        $processData->setState($state);
        $this->processes->save($processData);
    }
}