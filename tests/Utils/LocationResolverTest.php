<?php

namespace BmgApiV2Lib\Tests\Utils;

use BmgApiV2Lib\Models\City;
use BmgApiV2Lib\BmgApiV2Client;
use BmgApiV2Lib\Tests\TestCase;
use BmgApiV2Lib\Utils\LocationResolver;

class LocationResolverTest extends TestCase
{
    public function testFlatten()
    {
        $locations = self::getDemoBeMyGuestClient()
            ->getClient()
            ->getConfig()
            ->data
            ->locations
            ->data;

        $resolved = LocationResolver::resolve($locations, 'cities');

        $this->assertContainsOnlyInstancesOf(
            City::class,
            $resolved
        );
    }
}
