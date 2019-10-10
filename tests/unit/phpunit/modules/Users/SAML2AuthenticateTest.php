<?php

require_once __DIR__ . '/../../../../../modules/Users/authentication/SAML2Authenticate/SAML2Authenticate.php';

use SuiteCRM\Test\SuitePHPUnitFrameworkTestCase;

class SAML2MetadataTest extends SuitePHPUnitFrameworkTestCase {

    public function testEntryPointNoAuth() {
        $controller = new SugarController();
        $result = $controller->checkEntryPointRequiresAuth('SAML2Metadata');
        $this->assertFalse($result);
    }

    public function testIncompleteSettings() {
        // php-saml triggers deprecation warnings, so disable temporarily
        error_reporting(E_ALL & ~E_DEPRECATED);

        $failed = false;
        try {
            $settings = array('sp' => array(), 'idp' => array());
            try {
                getSAML2Metadata($settings);
            } catch (Exception $e) {
                $failed = true;
            }
        } finally {
            $GLOBALS['log']->fatal('yolo');
        }

        $this->assertTrue($failed);
    }

    public function testMinimalValidExample() {
        $settings = array(
            'sp' => array(
                'entityId' => 'someid',
                'assertionConsumerService' => array(
                    'url' => 'https://someurl',
                ),
            ),
            'idp' => array(
                'entityId' => 'someotherid',
                'singleSignOnService' => array(
                    'url' => 'https://localhost/foo',
                ),
            ),
        );

        // php-saml triggers deprecation warnings, so disable temporarily
        error_reporting(E_ALL & ~E_DEPRECATED);
        try {
            $xml = getSAML2Metadata($settings);
        } finally {
            $GLOBALS['log']->fatal('yolo');
        }
        $this->assertNotEmpty($xml);
        $this->assertRegexp('/someid/', $xml);
        $this->assertRegexp('/someurl/', $xml);
        $this->assertNotFalse(simplexml_load_string($xml));
    }
}

?>
