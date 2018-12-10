<?php
/*
 * BmgApiV2
 *
 * This file was automatically generated for bmg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BmgApiV2Lib\Models;

use JsonSerializable;

/**
 * Pagination data: page number, total pages, count per page
 */
class Meta implements JsonSerializable
{
    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      object $pagination public property
     */
    public $pagination;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param object $pagination Initialization value for $this->pagination
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->pagination = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['pagination'] = $this->pagination;

        return $json;
    }
}
