<?php

namespace Potter\Session\Native;

use Potter\Session\Session;

abstract class AbstractNativeSession extends Session implements NativeSessionInterface
{
    abstract public function setOption(string $option, string $value): void;
}
