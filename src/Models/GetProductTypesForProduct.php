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
class GetProductTypesForProduct implements JsonSerializable
{
    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      \BmgApiV2Lib\Models\ProductTypesForProduct[] $data public property
     */
    public $data;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param array $data Initialization value for $this->data
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->data = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['data'] = $this->data;

        return $json;
    }
}
