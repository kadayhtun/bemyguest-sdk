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
class OptionProductType implements JsonSerializable
{
    /**
     *
     * @var string $uuid
     */
    public $uuid;

    /**
     *
     * @var boolean $required
     */
    public $required;

    /**
     *
     * @var integer $price
     */
    public $price;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string $uuid      Initialization value for $this->uuid
     * @param string $startTime Initialization value for $this->startTime
     * @param string $endTime   Initialization value for $this->endTime
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->uuid      = func_get_arg(0);
            $this->required = func_get_arg(1);
            $this->price   = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['uuid']      = $this->uuid;
        $json['required'] = $this->required;
        $json['price']   = $this->price;

        return $json;
    }
}
