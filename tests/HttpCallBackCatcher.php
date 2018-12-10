<?php
/*
 * BmgApiV2
 *
 * This file was automatically generated for bmg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BmgApiV2Lib\Tests;

use BmgApiV2Lib\Http\HttpCallBack;

/**
 * An HTTPCallBack that captures the request and response for use later
 */
class HttpCallBackCatcher extends HttpCallBack
{
    /**
     * Http request
     *
     * @var BmgApiV2Lib\Http\HttpRequest
     */
    private $request;

    /**
     * Http Response
     *
     * @var BmgApiV2Lib\Http\HttpResponse
     */
    private $response;

    /**
     * Create instance
     */
    public function __construct()
    {
        $instance = $this;
        parent::__construct(
            null, function ($httpContext) use ($instance) {
                $instance->request = $httpContext->getRequest();
                $instance->response = $httpContext->getResponse();
            }
        );
    }

    /**
     * Get the HTTP Request object associated with this API call
     *
     * @return BmgApiV2Lib\Http\HttpRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Get the HTTP Response object associated with this API call
     *
     * @return BmgApiV2Lib\Http\HttpResponse
     */
    public function getResponse()
    {
        return $this->response;
    }
}
