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
class BookingCustomerContactData implements JsonSerializable
{
    /**
     * email
     *
     * @required
     * @var      string $email public property
     */
    public $email;

    /**
     * First name
     *
     * @required
     * @var      string $firstName public property
     */
    public $firstName;

    /**
     * Last name
     *
     * @required
     * @var      string $lastName public property
     */
    public $lastName;

    /**
     * Phone number
     *
     * @required
     * @var      string $phone public property
     */
    public $phone;

    /**
     * Salutation
     *
     * @required
     * @var      string $salutation public property
     */
    public $salutation;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string $email      Initialization value for $this->email
     * @param string $firstName  Initialization value for $this->firstName
     * @param string $lastName   Initialization value for $this->lastName
     * @param string $phone      Initialization value for $this->phone
     * @param string $salutation Initialization value for $this->salutation
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->email      = func_get_arg(0);
            $this->firstName  = func_get_arg(1);
            $this->lastName   = func_get_arg(2);
            $this->phone      = func_get_arg(3);
            $this->salutation = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['email']      = $this->email;
        $json['firstName']  = $this->firstName;
        $json['lastName']   = $this->lastName;
        $json['phone']      = $this->phone;
        $json['salutation'] = $this->salutation;

        return $json;
    }
}
