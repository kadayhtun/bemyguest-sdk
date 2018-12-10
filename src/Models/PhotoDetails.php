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
class PhotoDetails implements JsonSerializable
{
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
     * @var      \BmgApiV2Lib\Models\PathsDetails $paths public property
     */
    public $paths;

    /**
     *
     * @todo Write general description for this property
     * @var  string|null $caption public property
     */
    public $caption;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string       $uuid    Initialization value for $this->uuid
     * @param PathsDetails $paths   Initialization value for $this->paths
     * @param string       $caption Initialization value for $this->caption
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->uuid    = func_get_arg(0);
            $this->paths   = func_get_arg(1);
            $this->caption = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['uuid']    = $this->uuid;
        $json['paths']   = $this->paths;
        $json['caption'] = $this->caption;

        return $json;
    }
}
