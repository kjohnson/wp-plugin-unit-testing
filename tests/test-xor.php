<?php
class My_Xor_Tests extends WP_UnitTestCase {
    function setUp() {
        parent::setUp();
    }
    function test_0_0() {
        $this->assertFalse( my_xor( 0, 0 ) );
    }
    function test_0_1() {
        $this->assertTrue( my_xor( 0, 1 ) );
    }
    function test_1_0() {
        $this->assertTrue( my_xor( 1, 0 ) );
    }
    function test_1_1() {
        $this->assertFalse( my_xor( 1, 1 ) );
    }
}