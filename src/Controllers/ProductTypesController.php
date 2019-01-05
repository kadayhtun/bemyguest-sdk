<?php
/*
 * BmgApiV2
 *
 * This file was automatically generated for bmg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BmgApiV2Lib\Controllers;

use DateTime;
use Unirest\Request;
use BmgApiV2Lib\Models;
use BmgApiV2Lib\Servers;
use BmgApiV2Lib\APIHelper;
use BmgApiV2Lib\Exceptions;
use BmgApiV2Lib\APIException;
use BmgApiV2Lib\Configuration;
use BmgApiV2Lib\Http\HttpMethod;
use BmgApiV2Lib\Http\HttpContext;
use BmgApiV2Lib\Http\HttpRequest;
use BmgApiV2Lib\Http\HttpResponse;
use BmgApiV2Lib\Utils\DateTimeHelper;

/**
 *
 * @todo Add a general description for this controller.
 */
class ProductTypesController extends BaseController
{
    /**
     *
     * @var ProductTypesController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     *
     * @return ProductTypesController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Confirm availability and price of product-type using its UUID and date as a parameter. Before
     * creating a booking we advise to run this request first.
     *
     * @param  string    $uuid UUID of product type
     * @param  \DateTime $date Date YYYY-MM-DD
     * @return mixed response from the API call
     * @throws \APIException Thrown if API call fails
     */
    public function getCheckAvailabilityAndPrice(
        $uuid,
        $date
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder . '/v2/product-types/{uuid}/price-lists/{date}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters(
            $_queryBuilder,
            array (
            'uuid' => $uuid,
            'date' => DateTimeHelper::toSimpleDate(new DateTime($date)),
            )
        );

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => \BmgApiV2Lib\Configuration::$userAgent,
            'Accept'        => 'application/json',
            'X-Authorization' => Configuration::$xAuthorization
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new APIException('Unauthorized', $_httpContext);
        }

        if ($response->code == 404) {
            throw new APIException('Product type not found', $_httpContext);
        }

        if ($response->code == 410) {
            throw new APIException('Product is no longer available', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'BmgApiV2Lib\\Models\\CheckAvailabilityAndPriceResponse');
    }

    /**
     * Get information about product type using its UUID as the parameter.
     *
     * @param  string $uuid UUID of product type
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getProductTypeDetails(
        $uuid
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder . '/v2/product-types/{uuid}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters(
            $_queryBuilder,
            array (
            'uuid' => $uuid,
            )
        );

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => \BmgApiV2Lib\Configuration::$userAgent,
            'Accept'        => 'application/json',
            'X-Authorization' => Configuration::$xAuthorization
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('Invalid parameters', $_httpContext);
        }

        if ($response->code == 401) {
            throw new APIException('Unauthorized', $_httpContext);
        }

        if ($response->code == 404) {
            throw new APIException('Product type not found', $_httpContext);
        }

        if ($response->code == 410) {
            throw new APIException('Product is no longer available', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'BmgApiV2Lib\\Models\\GetProductTypeDetails');
    }

    /**
     * Get a list of product-types using its UUID as the parameter.
     *
     * @param  string $uuid UUID of product
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getProductTypesForProduct(
        $uuid
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder . '/v2/products/{uuid}/product-types';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters(
            $_queryBuilder,
            array (
            'uuid' => $uuid,
            )
        );

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => \BmgApiV2Lib\Configuration::$userAgent,
            'Accept'        => 'application/json',
            'X-Authorization' => Configuration::$xAuthorization
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new APIException('Unauthorized', $_httpContext);
        }

        if ($response->code == 404) {
            throw new APIException('Product not found', $_httpContext);
        }

        if ($response->code == 410) {
            throw new APIException('Product is no longer available', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'BmgApiV2Lib\\Models\\GetProductTypesForProduct');
    }

    /**
     * Get product type pricing using its UUID as the parameter.
     *
     * @param  string    $uuid      UUID of product type
     * @param  \DateTime $dateStart (optional) Start date for pricing list
     * @param  \DateTime $dateEnd   (optional) End date for pricing list
     * @param  string    $language  (optional) UUID of language
     * @return mixed response from the API call
     * @throws \APIException Thrown if API call fails
     */
    public function getPrices(
        $uuid,
        $dateStart = null,
        $dateEnd = null,
        $language = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder . '/v2/product-types/{uuid}/price-lists';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters(
            $_queryBuilder,
            array (
            'uuid'       => $uuid,
            )
        );

        $parameters = [
            'date_start' => DateTimeHelper::toSimpleDate(new DateTime($dateStart)),
            'date_end'   => DateTimeHelper::toSimpleDate(new DateTime($dateEnd)),
            'language'   => $language
        ];

        if (count($args = func_get_args()) === 2 && is_array($args[1])) {
            $parameters = $args[1];
        }

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, $parameters);

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => \BmgApiV2Lib\Configuration::$userAgent,
            'Accept'        => 'application/json',
            'X-Authorization' => Configuration::$xAuthorization
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('Invalid parameters', $_httpContext);
        }

        if ($response->code == 401) {
            throw new APIException('Unauthorized', $_httpContext);
        }

        if ($response->code == 404) {
            throw new APIException('Product type not found', $_httpContext);
        }

        if ($response->code == 410) {
            throw new APIException('Product is no longer available', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'BmgApiV2Lib\\Models\\ProductTypePriceLists');
    }
}
