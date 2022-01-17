<?php

namespace Potter\Session\Native;

use Potter\Session\Session;

abstract class AbstractNativeSession extends Session implements NativeSessionInterface
{
    use NativeSessionTrait;

    abstract public function setOption(string $option, string $value): void;
}