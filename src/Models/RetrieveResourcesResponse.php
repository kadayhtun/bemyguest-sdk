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
class RetrieveResourcesResponse implements JsonSerializable
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
     * @var      string $baseUrl public property
     */
    public $baseUrl;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $encoding public property
     */
    public $encoding;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      array $contentTypes public property
     */
    public $contentTypes;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      object $resources public property
     */
    public $resources;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string $name         Initialization value for $this->name
     * @param string $baseUrl      Initialization value for $this->baseUrl
     * @param string $encoding     Initialization value for $this->encoding
     * @param array  $contentTypes Initialization value for $this->contentTypes
     * @param object $resources    Initialization value for $this->resources
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->name         = func_get_arg(0);
            $this->baseUrl      = func_get_arg(1);
            $this->encoding     = func_get_arg(2);
            $this->contentTypes = func_get_arg(3);
            $this->resources    = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']         = $this->name;
        $json['baseUrl']      = $this->baseUrl;
        $json['encoding']     = $this->encoding;
        $json['contentTypes'] = $this->contentTypes;
        $json['resources']    = $this->resources;

        return $json;
    }
}
