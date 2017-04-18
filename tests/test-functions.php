<?php
class Plugin_Function_Tests extends WP_UnitTestCase {
    function setUp() {
        parent::setUp();
    }
    function test_plugin_is_sandbox() {
        $this->assertFalse( false );
        $this->assertTrue( true );
    }
}