<?php

namespace BmgApiV2Lib\Tests\Utils;

use BmgApiV2Lib\Utils\Arr;
use BmgApiV2Lib\Tests\TestCase;

class ArrTest extends TestCase
{
    public function testFlatten()
    {
        $dummyArr1 = [
            'a' => 'b',
            'c' => ['d' => 'e', 'f' => 'g', 'h' => ['i' => 'j', 'k' => 'l']]
        ];

        $flatten = Arr::flatten($dummyArr1);

        $this->assertEquals(
            ['b', 'e', 'g', 'j', 'l'],
            $flatten
        );

        $dummyArr2= ['a', ['b', 'c', 'd', 'e' => ['f', 'g', 'h' => ['i', 'j', 'k']]]];

        $flatOnlyFirstLevel = Arr::flatten($dummyArr2, 1);

        $this->assertEquals(
            ['a', 'b', 'c', 'd', ['f', 'g', 'h' => ['i', 'j', 'k']]],
            $flatOnlyFirstLevel
        );
    }
}
