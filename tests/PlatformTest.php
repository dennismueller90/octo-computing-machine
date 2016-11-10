<?php

class PlatformTest extends \PHPUnit_Framework_TestCase
{
    public function testInt()
    {
        $this->assertSame(4, PHP_INT_SIZE);
    }

    public function testGmp()
    {
        $this->assertTrue(function_exists('gmp_init'));
    }
}
