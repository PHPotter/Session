<?php

namespace Potter\Session\Cookie;

use Potter\Cookie\{
    CookieInterface,
    Safe\SafeCookie
};

trait CookieSessionTrait
{
    public function getCookie(): CookieInterface
    {
        return new SafeCookie(
            name: $this->getName(),
            value: $this->getId()
        );
    }
}