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
class APIController extends BaseController
{
    /**
     *
     * @var APIController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     *
     * @return APIController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Config object with location, timezones, base URL for images and many more.
     *
     * @param  string $fields (optional) coma separated list of keys (fields) to be returned
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getConfig($fields = null)
    {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder . '/v2/config';

        if ($fields && is_string($fields)) {
            //process optional query parameters
            APIHelper::appendUrlWithQueryParameters(
                $_queryBuilder,
                ['fields' => $fields]
            );
        }


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

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'BmgApiV2Lib\\Models\\GetConfigResponse');
    }
}
