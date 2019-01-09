<?php
/*
 * BmgApiV2
 *
 * This file was automatically generated for bmg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BmgApiV2Lib\Controllers;

use Unirest\Request;
use BmgApiV2Lib\Models;
use BmgApiV2Lib\Servers;
use BmgApiV2Lib\APIHelper;
use BmgApiV2Lib\Utils\Arr;
use BmgApiV2Lib\Exceptions;
use BmgApiV2Lib\APIException;
use BmgApiV2Lib\Configuration;
use BmgApiV2Lib\Http\HttpMethod;
use BmgApiV2Lib\Http\HttpContext;
use BmgApiV2Lib\Http\HttpRequest;
use BmgApiV2Lib\Http\HttpResponse;

/**
 *
 * @todo Add a general description for this controller.
 */
class BookingsController extends BaseController
{
    /**
     *
     * @var BookingsController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     *
     * @return BookingsController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Get a list of bookings.
     *
     * @param  string  $dateStart        (optional) Date start YYYY-MM-DD
     * @param  string  $dateEnd          (optional) Date start YYYY-MM-DD
     * @param  string  $firstName        (optional) Booking contact first name
     * @param  string  $lastName         (optional) Booking contact first name
     * @param  string  $email            (optional) Booking contact email
     * @param  string  $phone            (optional) Booking contact phone number
     * @param  string  $partnerReference (optional) Partner reference (your booking id)
     * @param  integer $page             (optional) Number of page
     * @param  integer $perPage          (optional) Number of bookings per page
     * @param  string  $query            (optional) Query string
     * @param  string  $status           (optional) Booking status
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getBookings(
        $dateStart = null,
        $dateEnd = null,
        $firstName = null,
        $lastName = null,
        $email = null,
        $phone = null,
        $partnerReference = null,
        $page = null,
        $perPage = null,
        $query = null,
        $status = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder . '/v2/bookings/';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters(
            $_queryBuilder,
            array (
            'date_start'        => $dateStart,
            'date_end'          => $dateEnd,
            'first_name'        => $firstName,
            'last_name'         => $lastName,
            'email'             => $email,
            'phone'             => $phone,
            'partner_reference' => $partnerReference,
            'page'              => $page,
            'per_page'          => $perPage,
            'query'             => $query,
            'status'            => $status,
            )
        );

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
        if ($response->code == 400) {
            throw new APIException('Invalid parameters', $_httpContext);
        }

        if ($response->code == 401) {
            throw new APIException('Unauthorized', $_httpContext);
        }

        if ($response->code == 404) {
            throw new APIException('Booking not found', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'BmgApiV2Lib\\Models\\GetBookingsResponse');
    }

    /**
     * Updates Booking status information.
     *
     * Newly created booking has status reserved. In this status, BeMyGuest inventory is not yet deducted.
     * Inventory is locked after changing the status of the booking from reserved to waiting (confirm
     * action).
     *
     * When the booking is first created, it is marked as reserved. Inventories aren't touched yet. Once
     * the partner decides to confirm the said booking, this is the only time the inventory will be
     * impacted. The booking status will be updated from reserved to waiting.
     *
     * 5 days after the booking date all booking with status waiting will be marked expired.
     *
     * @param  string $uuid   UUID of booking
     * @param  string $status Status `confirm` or `cancel`
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateBookingStatus(
        $uuid,
        $status
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder . '/v2/bookings/{uuid}/{status}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters(
            $_queryBuilder,
            array (
            'uuid'   => $uuid,
            'status' => $status,
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
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers);

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
            throw new APIException('Booking not found', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'BmgApiV2Lib\\Models\\UpdateBookingStatusResponse');
    }

    /**
     * Get Booking status information.
     *
     * @param  string $uuid UUID of booking
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getBookingStatus(
        $uuid
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder . '/v2/bookings/{uuid}';

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
            throw new APIException('Booking not found', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Get vouchers for booking by Booking UUID Attention! Download vouchers links require authorization.
     * You cannot just send the link to the final customer. You have to download them and distribute on
     * your own. Download time will be registered and available to you in booking details.
     *
     * @param  string $bookingUuid Booking UUID
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getVouchers(
        $bookingUuid
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder . '/v2/bookings/{bookingUuid}/vouchers';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters(
            $_queryBuilder,
            array (
            'bookingUuid' => $bookingUuid,
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
            throw new APIException('Booking not found', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'BmgApiV2Lib\\Models\\GetVouchersResponse');
    }

    /**
     * Resources related to bookings in the API.
     *
     * Before crating a booking check availability and price calling /v2/product-types/{uuid}/price-
     * lists/YYYY-MM-DD
     *
     * @param  Models\CreateABookingRequest $body Booking request payload (json)
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createABooking(
        $body
    ) {
        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder . '/v2/bookings';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => \BmgApiV2Lib\Configuration::$userAgent,
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8',
            'X-Authorization' => Configuration::$xAuthorization
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($body));

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

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);


        //handle file upload option if it present.
        if (!$this->handleFileUploadOptions($_httpContext)) {
            throw new APIException('Provided file can not upload.', $_httpContext);
        }

        $mapper = $this->getJsonMapper();
        return $mapper->mapClass($response->body, 'BmgApiV2Lib\\Models\\CreateABookingResponse');
    }

    /**
     * Upload file for option's inputType of image & file.
     *
     * @param  string  $bookingUuid Date start YYYY-MM-DD
     * @param  string  $optionUuid  Date start YYYY-MM-DD
     * @param  string  $type    Booking contact first name
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function optionFileUpload(
        $bookingUuid,
        $optionUuid,
        $type,
        $rawContent
    ) {
        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();

        //prepare query string for API call
        $_queryBuilder = $_queryBuilder . '/v2/bookings/{uuid}/options/{option_uuid}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters(
            $_queryBuilder,
            array(
                'uuid' => $bookingUuid,
                'option_uuid' => $optionUuid,
            )
        );

        APIHelper::appendUrlWithQueryParameters(
            $_queryBuilder,
            [
                'type' => $type
            ]
        );

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array(
            'user-agent' => \BmgApiV2Lib\Configuration::$userAgent,
            'Accept' => 'application/json',
            'X-Authorization' => Configuration::$xAuthorization
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response        
        $response = Request::put($_queryUrl, $_headers, $rawContent);
        
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
            throw new APIException('Booking not found', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $_httpContext;
    }

    /**
     * Handle file updload options of booking create payload.
     *
     * @param  array $context
     * @return bool
     */
    protected function handleFileUploadOptions(HttpContext $context)
    {
        $body = json_decode($context->getResponse()->getRawBody(), true);      

        //take actions only file upload options are provided.
        if (!empty($body['data']['options'])) {
            $options = $this->getFileUploadOptions($body);
            $bookingUUid = $body['data']['uuid'];
            foreach ($options as $option) {
                $this->fileUpload($bookingUUid,$option['uuid'],$option['value'],$body);
            }
        }

        return true;
    }

    /**
     * Get file-upload options among given options.
     *
     * @param  array $options
     * @return array
     */
    protected function getFileUploadOptions($body)
    {
        $result = [];
        // $options = Arr::flatten($body['data']['options']);
        $options = $body['data']['options'];

        if (!$options) {
            return $result;
        }

        // get all options from booked product
        $productTypeDetail = ProductTypesController::getInstance()
            ->getProductTypeDetails($body['data']['productTypeUuid'])
            ->data;

        $fileUploadOptions = array_filter(
            Arr::flatten($productTypeDetail->options),
            function ($option){
                return $option->inputType == 7 || $option->inputType == 8;
            }
        );

        if (!$fileUploadOptions) {
            return $result;
        }

        $fileUploadOptions = json_decode(json_encode($fileUploadOptions),true);
        // interset with reqeusted option

        $requestedFileUploadOptions = array_filter($options, function ($option) use ($fileUploadOptions) {
            $uuids = array_map(function ($fuOption) {
                return $fuOption['uuid'];
            },$fileUploadOptions);

            return in_array($option['uuid'], $uuids);
        });

        return array_values($requestedFileUploadOptions);
    }

    /**
     * Upload file.
     *
     * @param string $url
     * @return void
     */
    protected function fileUpload($bookingUUid,$optionUuid,$url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL) !== false) {
            $rawContent = file_get_contents($url);
            $tmp = Configuration::$basePath . '/tmp';
            $fileName = pathinfo($url, PATHINFO_FILENAME);
            $fileExtension = pathinfo($url, PATHINFO_EXTENSION);
            $file = $tmp . '/' . $fileName . '.' . $fileExtension;

            $written = file_put_contents($file, $rawContent);
            if ($written !== false) {
                $this->directFileUploadRequest($bookingUUid,$optionUuid,$file,$rawContent);
            }
        }
    }

    /**
     * Direct file upload request to BeMyGuest API.
     *
     * @param string $file
     * @return void
     */
    protected function directFileUploadRequest($bookingUUid,$optionUuid,$file,$rawContent)
    {        
        $type = pathinfo($file, PATHINFO_EXTENSION); // get file extension
        $context = $this->optionFileUpload($bookingUUid,$optionUuid,$type,$rawContent);
        if ($context->getResponse()->getStatusCode() == 201){
            unlink($file);
        }
    }
}
