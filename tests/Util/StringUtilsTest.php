<?php

namespace App\Tests\Util;

use App\Util\StringUtils;
use PHPUnit\Framework\TestCase;

class StringUtilsTest extends TestCase
{
    public function testUpper()
    {
        $stringUtils = new StringUtils();
        $result = $stringUtils->toUpper('Hello');

        // assert that string utils uppercased
        $this->assertEquals('HELLO', $result);
    }
}
