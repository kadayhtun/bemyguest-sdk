<?php
/*
 * BmgApiV2
 *
 * This file was automatically generated for bmg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BmgApiV2Lib\Models;

use JsonSerializable;
use BmgApiV2Lib\Utils\DateTimeHelper;

/**
 *
 * @todo Write general description for this model
 */
class CreateABookingRequest implements JsonSerializable
{
    /**
     * UUID of product type
     *
     * @required
     * @var      string $productTypeUuid public property
     */
    public $productTypeUuid;

    /**
     * Booking person contact data
     *
     * @required
     * @var      \BmgApiV2Lib\Models\BookingCustomerContactData $customer public property
     */
    public $customer;

    /**
     * Number of adults, can be 0 when minPax = 0
     *
     * @required
     * @var      integer $adults public property
     */
    public $adults;

    /**
     * Number of children
     *
     * @required
     * @var      integer $children public property
     */
    public $children;

    /**
     * Number of seniors
     *
     * @required
     * @var      integer $seniors public property
     */
    public $seniors;

    /**
     * Date
     *
     * @required
     * @factory  \BmgApiV2Lib\Utils\DateTimeHelper::fromSimpleDate
     * @var      \DateTime $arrivalDate public property
     */
    public $arrivalDate;

    /**
     * Your own id of booking
     *
     * @required
     * @var      string $partnerReference public property
     */
    public $partnerReference;

    /**
     * Booking options, please refer to booking options docs page
     *
     * @required
     * @var      \BmgApiV2Lib\Models\BookingOptionsEmptyObject[] $options public property
     */
    public $options;

    /**
     * message to host
     *
     * @var string|null $message public property
     */
    public $message;

    /**
     * UUID of timeslot. If timeslots provided.
     *
     * @var string|null $timeSlotUuid public property
     */
    public $timeSlotUuid;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string                     $productTypeUuid  Initialization value for $this->productTypeUuid
     * @param BookingCustomerContactData $customer         Initialization value for $this->customer
     * @param integer                    $adults           Initialization value for $this->adults
     * @param integer                    $children         Initialization value for $this->children
     * @param integer                    $seniors          Initialization value for $this->seniors
     * @param \DateTime                  $arrivalDate      Initialization value for $this->arrivalDate
     * @param string                     $partnerReference Initialization value for $this->partnerReference
     * @param array                      $options          Initialization value for $this->options
     * @param string                     $message          Initialization value for $this->message
     * @param string                     $timeSlotUuid     Initialization value for $this->timeSlotUuid
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->productTypeUuid  = func_get_arg(0);
            $this->customer         = func_get_arg(1);
            $this->adults           = func_get_arg(2);
            $this->children         = func_get_arg(3);
            $this->seniors          = func_get_arg(4);
            $this->arrivalDate      = func_get_arg(5);
            $this->partnerReference = func_get_arg(6);
            $this->options          = func_get_arg(7);
            $this->message          = func_get_arg(8);
            $this->timeSlotUuid     = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['productTypeUuid']  = $this->productTypeUuid;
        $json['customer']         = $this->customer;
        $json['adults']           = $this->adults;
        $json['children']         = $this->children;
        $json['seniors']          = $this->seniors;
        $json['arrivalDate']      = DateTimeHelper::toSimpleDate($this->arrivalDate);
        $json['partnerReference'] = $this->partnerReference;
        $json['options']          = $this->options;
        $json['message']          = $this->message;
        $json['timeSlotUuid']     = $this->timeSlotUuid;

        return $json;
    }
}
