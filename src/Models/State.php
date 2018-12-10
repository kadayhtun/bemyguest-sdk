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
class State implements JsonSerializable
{
    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $name public property
     */
    public $name;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $uuid public property
     */
    public $uuid;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      \BmgApiV2Lib\Models\Cities $cities public property
     */
    public $cities;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string $name   Initialization value for $this->name
     * @param string $uuid   Initialization value for $this->uuid
     * @param Cities $cities Initialization value for $this->cities
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->name   = func_get_arg(0);
            $this->uuid   = func_get_arg(1);
            $this->cities = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']   = $this->name;
        $json['uuid']   = $this->uuid;
        $json['cities'] = $this->cities;

        return $json;
    }
}
