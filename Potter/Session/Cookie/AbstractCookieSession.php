<?php

namespace Potter\Session\Cookie;

use Potter\Session\Native\NativeSession;

abstract class AbstractCookieSession extends NativeSession implements CookieSessionInterface
{
    abstract public function getCookie(): CookieInterface;
}