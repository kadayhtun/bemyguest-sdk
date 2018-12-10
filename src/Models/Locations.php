<?php

namespace BmgApiV2Lib\Models;

use JsonSerializable;

class Locations implements JsonSerializable
{
    /**
     *
     * @var \BmgApiV2Lib\Models\Continent[] $data
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
     *
     * @return array
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['data'] = $this->data;

        return $json;
    }
}
