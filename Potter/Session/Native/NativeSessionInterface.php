<?php

namespace Potter\Session\Native;

use Potter\Session\SessionInterface;

interface NativeSessionInterface extends SessionInterface
{
    public function setOption(string $option, string $value): void;
}