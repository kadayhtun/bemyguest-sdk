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
class VoucherValidity implements JsonSerializable
{
    /**
     *
     * @var object $adults
     */
    public $adults;

    /**
     *
     * @var object $children
     */
    public $children;

    /**
     *
     * @var object $seniors
     */
    public $seniors;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string $adults   Initialization value for $this->uuid
     * @param string $children Initialization value for $this->startTime
     * @param string $seniors  Initialization value for $this->endTime
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->adults      = func_get_arg(0);
            $this->children = func_get_arg(1);
            $this->seniors   = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['adults'] = (array) $this->adults;
        $json['children'] = (array) $this->children;
        $json['seniors'] = (array) $this->seniors;

        return $json;
    }
}
