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
class LocationStruct implements JsonSerializable
{
    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $city public property
     */
    public $city;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $cityUuid public property
     */
    public $cityUuid;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $state public property
     */
    public $state;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $stateUuid public property
     */
    public $stateUuid;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $country public property
     */
    public $country;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $countryUuid public property
     */
    public $countryUuid;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string $city        Initialization value for $this->city
     * @param string $cityUuid    Initialization value for $this->cityUuid
     * @param string $state       Initialization value for $this->state
     * @param string $stateUuid   Initialization value for $this->stateUuid
     * @param string $country     Initialization value for $this->country
     * @param string $countryUuid Initialization value for $this->countryUuid
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->city        = func_get_arg(0);
            $this->cityUuid    = func_get_arg(1);
            $this->state       = func_get_arg(2);
            $this->stateUuid   = func_get_arg(3);
            $this->country     = func_get_arg(4);
            $this->countryUuid = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['city']        = $this->city;
        $json['cityUuid']    = $this->cityUuid;
        $json['state']       = $this->state;
        $json['stateUuid']   = $this->stateUuid;
        $json['country']     = $this->country;
        $json['countryUuid'] = $this->countryUuid;

        return $json;
    }
}
