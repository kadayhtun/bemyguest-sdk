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
class AudioHeadsetLanguage implements JsonSerializable
{
    /**
     * Language name
     *
     * @required
     * @var      string $name public property
     */
    public $name;

    /**
     * UUID of language
     *
     * @required
     * @var      string $uuid public property
     */
    public $uuid;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string $name Initialization value for $this->name
     * @param string $uuid Initialization value for $this->uuid
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->name = func_get_arg(0);
            $this->uuid = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name'] = $this->name;
        $json['uuid'] = $this->uuid;

        return $json;
    }
}
