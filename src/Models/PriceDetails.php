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
class PriceDetails implements JsonSerializable
{
    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      object $adults public property
     */
    public $adults;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      object $children public property
     */
    public $children;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      object $seniors public property
     */
    public $seniors;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      array $cancellationPolicy public property
     */
    public $cancellationPolicy;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param array  $adults             Initialization value for $this->adults
     * @param object $children           Initialization value for $this->children
     * @param object $seniors            Initialization value for $this->seniors
     * @param array  $cancellationPolicy Initialization value for $this->cancellationPolicy
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->adults             = func_get_arg(0);
            $this->children           = func_get_arg(1);
            $this->seniors            = func_get_arg(2);
            $this->cancellationPolicy = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['adults']             = $this->adults;
        $json['children']           = $this->children;
        $json['seniors']            = $this->seniors;
        $json['cancellationPolicy'] = $this->cancellationPolicy;

        return $json;
    }
}
