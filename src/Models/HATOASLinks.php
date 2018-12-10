<?php
/*
 * BmgApiV2
 *
 * This file was automatically generated for bmg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BmgApiV2Lib\Models;

use JsonSerializable;

/**
 * Links to navigate thru API
 */
class HATOASLinks implements JsonSerializable
{
    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $method public property
     */
    public $method;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $rel public property
     */
    public $rel;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $href public property
     */
    public $href;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string $method Initialization value for $this->method
     * @param string $rel    Initialization value for $this->rel
     * @param string $href   Initialization value for $this->href
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->method = func_get_arg(0);
            $this->rel    = func_get_arg(1);
            $this->href   = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['method'] = $this->method;
        $json['rel']    = $this->rel;
        $json['href']   = $this->href;

        return $json;
    }
}
