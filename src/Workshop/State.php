<?php

namespace Workshop;

class State
{
    /** @var mixed[] */
    private $values = [];

    public function getValues()
    {
        return $this->values;
    }

    public function setValue(string $name, string $value): self
    {
        $this->values[$name] = $value;

        return $this;
    }

}