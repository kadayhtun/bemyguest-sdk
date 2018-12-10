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
class GetBookingsResponse implements JsonSerializable
{
    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      array $data public property
     */
    public $data;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      object $meta public property
     */
    public $meta;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param array  $data Initialization value for $this->data
     * @param object $meta Initialization value for $this->meta
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->data = func_get_arg(0);
            $this->meta = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['data'] = $this->data;
        $json['meta'] = $this->meta;

        return $json;
    }
}
