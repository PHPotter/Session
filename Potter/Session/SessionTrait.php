<?php

namespace Potter\Session;

trait SessionTrait
{
    private string $id;
    private string $name;
    private array $options = [];

    final public function getFullName(): string
    {
        return $this->getName() . '_' . $this->getId();
    }

    final public function getId(): string
    {
        if (isset($this->id))
            return $this->id;
        return $this->id = session_id();
    }

    final public function getName(): string
    {
        if (isset($this->name))
            return $this->name;
        return $this->name = session_name();
    }

    final public function destroy(): void
    {
        session_destroy();
    }

    final public function setId(string $id): void
    {
        session_id($this->id = $id);
    }

    final public function setName(string $name): void
    {
        session_name($this->name = $name);
    }

    final public function setOption(string $option, string $value): void
    {
        $this->options[$option] = $value;
    }
    
    final public function start(): void
    {
        session_start($this->options);   
    }
}