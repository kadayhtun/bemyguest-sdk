<?php
/*
 * BmgApiV2
 *
 * This file was automatically generated for bmg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BmgApiV2Lib\Tests\Controllers;

use DateTime;
use BmgApiV2Lib\APIException;
use BmgApiV2Lib\Tests\TestCase;
use BmgApiV2Lib\Tests\TestHelper;
use BmgApiV2Lib\Tests\HttpCallBackCatcher;

class ProductTypesControllerTest extends TestCase
{
    /**
     *
     * @var \BmgApiV2Lib\Controllers\ProductsController Controller instance
     */
    protected static $controller;

    /**
     *
     * @var \BmgApiV2Lib\Models\ProductList Callback
     */
    protected static $product;

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

        self::$controller = self::$bmg->productTypes();

        self::$product = self::$bmg->products()
            ->getProductList()
            ->data[0];
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    public function testGetProductTypesForProduct()
    {
        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);

        try {
            $result = self::$controller->getProductTypesForProduct(
                self::$product->uuid
            );
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        return $result;
    }

    /**
     *
     * @depends testGetProductTypesForProduct
     */
    public function testGetProductTypeDetails()
    {
        $type = current(func_get_arg(0)->data);

        // Set callback and perform API call
        self::$controller->setHttpCallBack($this->httpResponse);

        $result = self::$controller->getProductTypeDetails($type->uuid);

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        return $result->data;
    }

    /**
     *
     * @depends testGetProductTypeDetails
     */
    public function testGetCheckAvailabilityAndPrice()
    {
        $type = func_get_arg(0);

        // Set callback and perform API call
        self::$controller->setHttpCallBack($this->httpResponse);

        $result = self::$controller->getCheckAvailabilityAndPrice(
            $type->uuid,
            (new DateTime())->format('Y-m-d')
        );

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     *
     * @depends testGetProductTypesForProduct
     */
    public function testGetPrices()
    {
        $type = current(func_get_arg(0)->data);

        // Set callback and perform API call
        self::$controller->setHttpCallBack($this->httpResponse);

        $result = self::$controller->getPrices(
            $type->uuid,
            (new DateTime)->format('Y-m-d'),
            (new DateTime('+1 day'))->format('Y-m-d')
        );

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }
}
