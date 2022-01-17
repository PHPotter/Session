<?php

namespace Potter\Session;

trait SessionTrait
{
    final public function getFullName(): string
    {
        return $this->getName() . '_' . $this->getId();
    }
    
    abstract public function getId(): string;

    abstract public function getName(): string;
}