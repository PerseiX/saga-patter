<?php

namespace Workshop;

interface ProcessRepository
{
    public function get(string $processId): ProcessData;

    public function save(ProcessData $process): void;
}