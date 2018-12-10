<?php
/*
 * BmgApiV2
 *
 * This file was automatically generated for bmg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BmgApiV2Lib\Controllers;

use BmgApiV2Lib\Http\HttpCallBack;
use BmgApiV2Lib\Http\HttpContext;
use BmgApiV2Lib\Http\HttpResponse;
use BmgApiV2Lib\APIException;
use BmgApiV2Lib\Exceptions;
use \apimatic\jsonmapper\JsonMapper;
use Unirest\Request;

/**
 * Base controller
 */
class BaseController
{
    /**
     * HttpCallBack instance associated with this controller
     *
     * @var HttpCallBack
     */
    private $httpCallBack = null;

     /**
      * Constructor that sets the timeout of requests
      */

    /**
     * Set HttpCallBack for this controller
     *
     * @param HttpCallBack $httpCallBack Http Callbacks called before/after each API call
     */
    public function setHttpCallBack(HttpCallBack $httpCallBack)
    {
        $this->httpCallBack = $httpCallBack;
    }

    /**
     * Get HttpCallBack for this controller
     *
     * @return HttpCallBack The HttpCallBack object set for this controller
     */
    public function getHttpCallBack()
    {
        return $this->httpCallBack;
    }

    /**
     * Get a new JsonMapper instance for mapping objects
     *
     * @return \apimatic\jsonmapper\JsonMapper JsonMapper instance
     */
    protected function getJsonMapper()
    {
        $mapper = new JsonMapper();
        return $mapper;
    }

    protected function validateResponse(HttpResponse $response, HttpContext $_httpContext)
    {
        if ($response->getStatusCode() == 400) {
            throw new APIException('Wrong Arguments', $_httpContext);
        }

        if ($response->getStatusCode() == 401) {
            throw new APIException('Unauthorized', $_httpContext);
        }

        if ($response->getStatusCode() == 403) {
            throw new APIException('Forbidden', $_httpContext);
        }

        if ($response->getStatusCode() == 404) {
            throw new APIException('Resource Not Found', $_httpContext);
        }

        if ($response->getStatusCode() == 405) {
            throw new APIException('Method Not Allowed', $_httpContext);
        }

        if ($response->getStatusCode() == 410) {
            throw new APIException('Resource No Longer Available', $_httpContext);
        }

        if (($response->getStatusCode() < 200) || ($response->getStatusCode() > 208)) { //[200,208] = HTTP OK
            throw new APIException('HTTP Response Not OK', $_httpContext);
        }
    }
}
