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
class CategoriesData implements JsonSerializable
{
    /**
     * name of category
     *
     * @required
     * @maps     Name
     * @var      string $name public property
     */
    public $name;

    /**
     * UUID of category
     *
     * @required
     * @var      string $uuid public property
     */
    public $uuid;

    /**
     * Sub categories
     *
     * @var \BmgApiV2Lib\Models\CategoryChild[]|null $children public property
     */
    public $children;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string $name     Initialization value for $this->name
     * @param string $uuid     Initialization value for $this->uuid
     * @param array  $children Initialization value for $this->children
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->name     = func_get_arg(0);
            $this->uuid     = func_get_arg(1);
            $this->children = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Name']     = $this->name;
        $json['uuid']     = $this->uuid;
        $json['children'] = $this->children;

        return $json;
    }
}
