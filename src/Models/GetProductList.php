<?php
/*
 * BmgApiV2
 *
 * This file was automatically generated for bmg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BmgApiV2Lib\Models;

use JsonSerializable;

/**
 * Product list data
 */
class GetProductList implements JsonSerializable
{
    /**
     * Data container
     *
     * @required
     * @var      \BmgApiV2Lib\Models\ProductList[] $data public property
     */
    public $data;

    /**
     * Meta description, pagination, page count
     *
     * @required
     * @var      \BmgApiV2Lib\Models\Meta $meta public property
     */
    public $meta;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param array $data Initialization value for $this->data
     * @param Meta  $meta Initialization value for $this->meta
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
