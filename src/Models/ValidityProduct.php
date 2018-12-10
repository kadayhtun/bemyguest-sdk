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
class ValidityProduct implements JsonSerializable
{
    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $type public property
     */
    public $type;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $days public property
     */
    public $days;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $date public property
     */
    public $date;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string $type Initialization value for $this->type
     * @param string $days Initialization value for $this->days
     * @param string $date Initialization value for $this->date
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->type = func_get_arg(0);
            $this->days = func_get_arg(1);
            $this->date = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type'] = $this->type;
        $json['days'] = $this->days;
        $json['date'] = $this->date;

        return $json;
    }
}
