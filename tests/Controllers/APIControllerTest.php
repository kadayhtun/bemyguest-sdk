<?php
/*
 * BmgApiV2
 *
 * This file was automatically generated for bmg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BmgApiV2Lib\Tests\Controllers;

use BmgApiV2Lib\APIException;
use BmgApiV2Lib\Tests\TestCase;
use BmgApiV2Lib\Tests\TestHelper;
use BmgApiV2Lib\Tests\HttpCallBackCatcher;

class APIControllerTest extends TestCase
{
    /**
     *
     * @var \BmgApiV2Lib\Controllers\APIController Controller instance
     */
    protected static $controller;

    /**
     *
     * @var \BmgApiV2Lib\Tests\HttpCallBackCatcher Callback
     */
    protected $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();

        self::$controller = self::$bmg->client();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Get config
     */
    public function testGetConfigTest()
    {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getConfig();
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test headers
        $headers = [];
        $headers['Content-Type'] = null ;

        $this->assertTrue(
            TestHelper::areHeadersProperSubsetOf($headers, $this->httpResponse->getResponse()->getHeaders(), true),
            "Headers do not match"
        );
    }
}
