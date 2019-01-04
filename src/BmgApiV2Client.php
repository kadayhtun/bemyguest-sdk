<?php
/*
 * BmgApiV2
 *
 * This file was automatically generated for bmg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BmgApiV2Lib;

use BmgApiV2Lib\Controllers;

/**
 * BmgApiV2 client class
 */
class BmgApiV2Client
{
    /**
     * Constructor with authentication and configuration parameters
     *
     * @param string $xAuthorization
     */
    public function __construct(
        $xAuthorization
    ) {
        Configuration::$xAuthorization = $xAuthorization;
    }
    /**
     * Singleton access to BulkBuys controller
     *
     * @return Controllers\BulkBuysController The *Singleton* instance
     */
    public function getBulkBuys()
    {
        return Controllers\BulkBuysController::getInstance();
    }
    /**
     * Singleton access to API controller
     *
     * @return Controllers\APIController The *Singleton* instance
     */
    public function getClient()
    {
        return Controllers\APIController::getInstance();
    }
    /**
     * Singleton access to Bookings controller
     *
     * @return Controllers\BookingsController The *Singleton* instance
     */
    public function getBookings()
    {
        return Controllers\BookingsController::getInstance();
    }
    /**
     * Singleton access to Products controller
     *
     * @return Controllers\ProductsController The *Singleton* instance
     */
    public function getProducts()
    {
        return Controllers\ProductsController::getInstance();
    }
    /**
     * Singleton access to ProductTypes controller
     *
     * @return Controllers\ProductTypesController The *Singleton* instance
     */
    public function getProductTypes()
    {
        return Controllers\ProductTypesController::getInstance();
    }
}
