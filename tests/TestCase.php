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
        $key = getenv('BEMYGUEST_API_KEY', true) ?: getenv('BEMYGUEST_API_KEY');
        $env = $key ? Environments::DEMO : Environments::ANONYMOUS;

        self::$bmg = new BeMyGuest($key, $env);
    }
}
