<?php

namespace BmgApiV2Lib\Tests;

use BmgApiV2Lib\BeMyGuest;
use BmgApiV2Lib\Environments;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public static $bmg;

    public static function setUpBeforeClass()
    {
        $key = getenv('BE_MY_GUEST_KEY') ?: null;
        $env = $key ?? Environments::ANONYMOUS;

        self::$bmg = new BeMyGuest($key, $env);
    }
}
