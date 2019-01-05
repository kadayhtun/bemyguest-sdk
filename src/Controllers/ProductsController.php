<?php
/*
 * BmgApiV2
 *
 * This file was automatically generated for bmg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BmgApiV2Lib\Controllers;

use BmgApiV2Lib\APIException;
use BmgApiV2Lib\APIHelper;
use BmgApiV2Lib\Configuration;
use BmgApiV2Lib\Models;
use BmgApiV2Lib\Exceptions;
use BmgApiV2Lib\Utils\DateTimeHelper;
use BmgApiV2Lib\Http\HttpRequest;
use BmgApiV2Lib\Http\HttpResponse;
use BmgApiV2Lib\Http\HttpMethod;
use BmgApiV2Lib\Http\HttpContext;
use BmgApiV2Lib\Servers;
use Unirest\Request;

/**
 *
 * @todo Add a general description for this controller.
 */
class ProductsController extends BaseController
{
    /**
     *
     * @var ProductsController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     *
     * @return ProductsController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * List of available products.
     *
     * @param  string   $country         (optional) UUID of country
     * @param  string   $city            (optional) UUID of city, it will always overwrite country parameter if
     *                                   provided
     * @param  integer  $priceMin        (optional) minimal price in decimal format 000.00 - it's compared to base
     *                                   price
     * @param  integer  $priceMax        (optional) max price in decimal format 000.00
     * @param  string   $category        (optional) UUID of litsing category
     * @param  integer  $pax             (optional) number of people
     * @param  string   $language        (optional) language UUID, also language code may be provided. It will
     *                                   overwrite the default language from user account
     * @param  DateTime $dateStart       (optional) product start date, format YYYY-MM-DD
     * @param  DateTime $dateEnd         (optional) product end date, format YYYY-MM-DD
     * @param  string   $query           (optional) free phrase for text search for example &query=Bali
     * @param  integer  $durationDaysMin (optional) product duration minimum days (default 0)
     * @param  integer  $durationDaysMax (optional) product duration maximum days (default NULL)
     * @param  string   $sort            (optional) sorting field, example: &sort=date,-price  or &sort=price
     * @param  double   $page            (optional) page number for results
     * @param  double   $perPage         (optional) how many results per page - if not provided default value from
     *                                   user account will be used
     * @param  string   $published       (optional) default is always set to `true`
     * @param  string   $deleted         (optional) default is set to `false`
     * @param  string   $fields          (optional) coma separated list of keys (fields) to be returned
     * @param  string   $currency        (optional) UUID of currency
     * @param  string   $updatedAfter    (optional) Date YYYY-MM-DD
     * @param  string   $latitude        (optional) Latitude
     * @param  string   $longitude       (optional) Longitude
     * @param  string   $distance        (optional) Distance ascending (works only if latitude,longitude & distance
     *                                   parameters are provided, ignored otherwise)
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getProductList(
        $country = null,
        $city = null,
        $priceMin = null,
        $priceMax = null,
        $category = null,
        $pax = null,
        $language = null,
        $dateStart = null,
        $dateEnd = null,
        $query = null,
        $durationDaysMin = null,
        $durationDaysMax = null,
        $sort = null,
        $page = null,
        $perPage = null,
        $published = null,
        $deleted = null,
        $fields = null,
        $currency = null,
        $updatedAfter = null,
        $latitude = null,
        $longitude = null,
        $distance = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder . '/v2/products';

        $parameters = [
            'country'           => $country,
            'city'              => $city,
            'price_min'         => $priceMin,
            'price_max'         => $priceMax,
            'category'          => $category,
            'pax'               => $pax,
            'language'          => $language,
            'date_start'        => DateTimeHelper::toSimpleDate($dateStart),
            'date_end'          => DateTimeHelper::toSimpleDate($dateEnd),
            'query'             => $query,
            'duration_days_min' => $durationDaysMin,
            'duration_days_max' => $durationDaysMax,
            'sort'              => $sort,
            'page'              => $page,
            'per_page'          => $perPage,
            'published'         => $published,
            'deleted'           => $deleted,
            'fields'            => $fields,
            'currency'          => $currency,
            'updated_after'     => $updatedAfter,
            'latitude'          => $latitude,
            'longitude'         => $longitude,
            'distance'          => $distance,
        ];

        if (count($args = func_get_args()) && is_array($args[0])) {
            $parameters = $args[0];
        }

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, $parameters);

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'      => \BmgApiV2Lib\Configuration::$userAgent,
            'Accept'          => 'application/json',
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

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'BmgApiV2Lib\\Models\\GetProductList');
    }

    /**
     * Get information about the product using its UUID as a parameter.
     *
     * @param  string $uuid     UUID of product
     * @param  string $currency (optional) currency UUID, also currency code may be provided in exchange
     * @param  string $language (optional) language UUID, also language code may be provided
     * @param  string $fields   (optional) comma separated list of fields to retrive
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getProductDetails(
        $uuid,
        $currency = null,
        $language = null,
        $fields = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder . '/v2/products/{uuid}/';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters(
            $_queryBuilder,
            array (
            'uuid'     => $uuid,
            )
        );

        $parameters = [
            'currency' => $currency,
            'language' => $language,
            'fields'   => $fields,
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
            throw new APIException('Product not found', $_httpContext);
        }

        if ($response->code == 410) {
            throw new APIException('Product is no longer available', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'BmgApiV2Lib\\Models\\GetProductDetails');
    }
}
