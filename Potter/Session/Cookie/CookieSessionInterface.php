<?php

namespace Potter\Session\Cookie;

use Potter\{
    Cookie\CookieInterface,
    Session\SessionInterface
};

interface CookieSessionInterface extends SessionInterface
{
    public function getCookie(): CookieInterface;
}