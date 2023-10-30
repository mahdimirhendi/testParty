<?php
namespace stubs;

use PHPUnit\Framework\TestCase;

class TestLoad extends TestCase
{
    /**
     * @covers first test
     * @test it works
     */
    function first_test(){

        $this->assertTrue(true);
    }
    /**
     * @covers second test
     * @test it works well
     */
    function second_test(){

        $this->assertTrue(true);
    }

}