<?php

namespace Potter\Session;

interface SessionInterface
{
    public function getFullName(): string;
    
    public function getId(): string;

    public function getName(): string;

    public function destroy(): void;

    public function setId(string $id): void;

    public function setName(string $name): void;

    public function setOption(string $option, string $value): void;

    public function start(): void;
}