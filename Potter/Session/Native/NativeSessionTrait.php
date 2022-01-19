<?php

namespace Potter\Session\Native;

trait NativeSessionTrait
{
    private string $id;
    private string $name;
    private array $options = [];

    public function getId(): string
    {
        if (isset($this->id))
            return $this->id;
        return $this->id = session_id();
    }

    public function getName(): string
    {
        if (isset($this->name))
            return $this->name;
        return $this->name = session_name();
    }

    public function destroy(): void
    {
        session_destroy();
    }

    public function setId(string $id): void
    {
        session_id($this->id = $id);
    }

    public function setName(string $name): void
    {
        session_name($this->name = $name);
    }

    public function setOption(string $option, string $value): void
    {
        $this->options[$option] = $value;
    }
    
    public function start(): void
    {
        session_start($this->options);   
    }
}