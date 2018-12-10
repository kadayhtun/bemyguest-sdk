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
class ProductHitRequest implements JsonSerializable
{
    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $country public property
     */
    public $country;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $language public property
     */
    public $language;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $device public property
     */
    public $device;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string $country  Initialization value for $this->country
     * @param string $language Initialization value for $this->language
     * @param string $device   Initialization value for $this->device
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->country  = func_get_arg(0);
            $this->language = func_get_arg(1);
            $this->device   = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['country']  = $this->country;
        $json['language'] = $this->language;
        $json['device']   = $this->device;

        return $json;
    }
}
