<?php

use SuiteCRM\Test\SuitePHPUnitFrameworkTestCase;
use SuiteCRM\SuiteApplication;

class SuiteApplicationTest extends SuitePHPUnitFrameworkTestCase
{
    function testroute() {
        // Test that it works when all four parameters are supplied.
        $this->assertEquals(
            "index.php?module=Store&action=buy&return_module=Store&return_action=FooView",
            SuiteApplication::route('Store', 'buy', 'Store', 'FooView')
        );
        // Test that it works even if the other values are null.
        $this->assertEquals("index.php?module=Store", SuiteApplication::route('Store', null, null, null));
        $this->assertEquals("index.php?action=buy", SuiteApplication::route(null, 'buy', null, null));
        $this->assertEquals("index.php?return_module=Store", SuiteApplication::route(null, null, 'Store', null));
        $this->assertEquals("index.php?return_action=FooView", SuiteApplication::route(null, null, null, 'FooView'));
    }
}
