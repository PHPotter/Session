<?php

namespace Potter\Session\Cookie;

use Potter\Session\Native\NativeSessionInterface;

interface CookieSessionInterface extends NativeSessionInterface
{
    public function getCookie(): CookieInterface;
}