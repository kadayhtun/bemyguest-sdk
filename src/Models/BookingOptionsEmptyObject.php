<?php
/*
 * BmgApiV2
 *
 * This file was automatically generated for bmg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BmgApiV2Lib\Models;

use JsonSerializable;

/**
 *
 * @todo Write general description for this model
 */
class BookingOptionsEmptyObject implements JsonSerializable
{
    /**
     * Options per pax array
     *
     * @required
     * @var      array $perPax public property
     */
    public $perPax;

    /**
     * Options per booking array
     *
     * @required
     * @var      array $perBooking public property
     */
    public $perBooking;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param array $perPax     Initialization value for $this->perPax
     * @param array $perBooking Initialization value for $this->perBooking
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->perPax     = func_get_arg(0);
            $this->perBooking = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['perPax']     = $this->perPax;
        $json['perBooking'] = $this->perBooking;

        return $json;
    }
}
