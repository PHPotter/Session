<?php

namespace Potter\Session\Cookie;

use Potter\{
    Cookie\CookieInterface,
    Session\Session
};

abstract class AbstractCookieSession extends Session implements CookieSessionInterface
{
    abstract public function getCookie(): CookieInterface;
}