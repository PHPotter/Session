<?php

namespace Potter\Session\Native;

use Potter\Session\Session;

final class NativeSession extends Session
{
    use NativeSessionTrait;

    public function __construct(string $name = null, bool $start = true)
    {
        if (isset($name))
            $this->setName($name);
        if (!$start)
            return;
        $this->start();
    }
}