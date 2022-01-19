<?php

namespace Potter\Session;

abstract class AbstractSession implements SessionInterface
{
    abstract public function getFullName(): string;
    
    abstract public function getId(): string;

    abstract public function getName(): string;
    
    abstract public function destroy(): void;

    abstract public function setId(string $id): void;

    abstract public function setName(string $name): void;

    abstract public function setOption(string $option, string $value): void;

    abstract public function start(): void;
}