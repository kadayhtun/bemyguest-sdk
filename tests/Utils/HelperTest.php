<?php

namespace BmgApiV2Lib\Tests\Utils;

use BmgApiV2Lib\Utils\Helper;
use BmgApiV2Lib\Tests\TestCase;

class HelperTest extends TestCase
{
    public function testPropertiesExists()
    {
        $obj = (new class {
            public $abc;
            public $def;
            public $ghi;
        });

        $found = Helper::propertiesExists($obj, ['zzz', 'lmn', 'abc']);

        $this->assertEquals(
            'abc',
            $found
        );

        $found = Helper::propertiesExists($obj, ['zzz', 'lmn', 'qpr']);

        $this->assertFalse($found);
    }
}
