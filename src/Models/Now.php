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
class Now implements JsonSerializable
{
    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $date public property
     */
    public $date;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @maps     timezone_type
     * @var      integer $timezoneType public property
     */
    public $timezoneType;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $timezone public property
     */
    public $timezone;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string  $date         Initialization value for $this->date
     * @param integer $timezoneType Initialization value for $this->timezoneType
     * @param string  $timezone     Initialization value for $this->timezone
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->date         = func_get_arg(0);
            $this->timezoneType = func_get_arg(1);
            $this->timezone     = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['date']          = $this->date;
        $json['timezone_type'] = $this->timezoneType;
        $json['timezone']      = $this->timezone;

        return $json;
    }
}
