<?php


use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    function test_sample_test()
    {
        $this->assertEquals(4, 2 + 2, "Something is wrong");
    }

    function test_sample_test_2()
    {
        $variable = null;
        $this->assertNull(null, "${$variable} is not null");
    }
}