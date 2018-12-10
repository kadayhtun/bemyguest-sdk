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
class ProductTypesForProduct implements JsonSerializable
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
     * @var      string $title public property
     */
    public $title;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      \BmgApiV2Lib\Models\HATOASLinks[] $links public property
     */
    public $links;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string $uuid  Initialization value for $this->uuid
     * @param string $title Initialization value for $this->title
     * @param array  $links Initialization value for $this->links
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->uuid  = func_get_arg(0);
            $this->title = func_get_arg(1);
            $this->links = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['uuid']  = $this->uuid;
        $json['title'] = $this->title;
        $json['links'] = $this->links;

        return $json;
    }
}
