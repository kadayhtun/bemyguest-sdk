<?php
/*
 * BmgApiV2
 *
 * This file was automatically generated for bmg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BmgApiV2Lib\Tests\Controllers;

use BmgApiV2Lib\APIException;
use BmgApiV2Lib\BmgApiV2Client;
use BmgApiV2Lib\Tests\TestCase;
use BmgApiV2Lib\Tests\TestHelper;
use BmgApiV2Lib\Utils\LocationResolver;
use BmgApiV2Lib\Tests\HttpCallBackCatcher;

class ProductsControllerTest extends TestCase
{
    /**
     *
     * @var \BmgApiV2Lib\Controllers\ProductsController Controller instance
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

        self::$controller = self::$bmg->products();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    public function testGetProductList()
    {
        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);

        $result = self::$controller->getProductList();

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        return $result;
    }

    public function testGetProductListWithParams()
    {
        $locations = self::getDemoBeMyGuestClient()
            ->getClient()
            ->getConfig()
            ->data
            ->locations
            ->data;

        $cities = LocationResolver::resolve($locations, 'cities');

        self::$controller->setHttpCallBack($this->httpResponse);
        self::$controller->getProductList(['city' => $cities[0]->uuid]);

        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     *
     * @depends testGetProductList
     */
    public function testGetProductDetails()
    {
        $products = func_get_arg(0);

        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);

        try {
            $result = self::$controller->getProductDetails($products->data[0]->uuid);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }
}
