<?php

namespace BmgApiV2Lib\Tests;

use Exception;
use BmgApiV2Lib\BeMyGuest;
use BmgApiV2Lib\Environments;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public static $bmg;

    public static function setUpBeforeClass()
    {
        self::$bmg = self::getDemoBeMyGuestClient();
    }

    protected static function getDemoBeMyGuestClient()
    {
        $key = getenv('BEMYGUEST_API_KEY', true) ?: getenv('BEMYGUEST_API_KEY');
        
        if (!$key) {
            throw new Exception("BeMyGuest API key required!");
            
        }

        return new BeMyGuest($key, Environments::DEMO);
    }
}
