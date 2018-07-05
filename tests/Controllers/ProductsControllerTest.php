<?php
/*
 * BmgApiV2
 *
 * This file was automatically generated for bmg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BmgApiV2Lib\Tests;

use BmgApiV2Lib\APIException;
use BmgApiV2Lib\Exceptions;
use BmgApiV2Lib\APIHelper;
use BmgApiV2Lib\Models;
use BmgApiV2Lib\Utils\DateTimeHelper;

class ProductsControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \BmgApiV2Lib\Controllers\ProductsController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass()
    {
        $client = new \BmgApiV2Lib\BmgApiV2Client();
        self::$controller = $client->getProducts();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }
}
