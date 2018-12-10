<?php

namespace BmgApiV2Lib\Models;

use JsonSerializable;

class Continent implements JsonSerializable
{
    /**
     *
     * @var string $continent
     */
    public $continent;

    /**
     *
     * @var string $code
     */
    public $code;

    /**
     *
     * @var string $uuid
     */
    public $uuid;

    /**
     *
     * @var \BmgApiV2Lib\Models\Countries
     */
    public $countries;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string $name Initialization value for $this->name
     * @param string $code Initialization value for $this->code
     * @param string $uuid Initialization value for $this->uuid
     * @param string $uuid Initialization value for $this->countries
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->continent = func_get_arg(0);
            $this->code = func_get_arg(1);
            $this->uuid = func_get_arg(2);
            $this->countries = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     *
     * @return array
     */
    public function jsonSerialize()
    {
        $json = [];
        $json['continent'] = $this->continent;
        $json['code'] = $this->code;
        $json['uuid'] = $this->uuid;
        $json['countries'] = $this->countries;

        return $json;
    }
}
