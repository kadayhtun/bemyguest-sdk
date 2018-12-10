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
class PostBulkBuyRequestRequest implements JsonSerializable
{
    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $message public property
     */
    public $message;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $bulkProductTypeUuid public property
     */
    public $bulkProductTypeUuid;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $adults public property
     */
    public $adults;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $children public property
     */
    public $children;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $seniors public property
     */
    public $seniors;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string  $message             Initialization value for $this->message
     * @param string  $bulkProductTypeUuid Initialization value for $this->bulkProductTypeUuid
     * @param integer $adults              Initialization value for $this->adults
     * @param integer $children            Initialization value for $this->children
     * @param integer $seniors             Initialization value for $this->seniors
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->message             = func_get_arg(0);
            $this->bulkProductTypeUuid = func_get_arg(1);
            $this->adults              = func_get_arg(2);
            $this->children            = func_get_arg(3);
            $this->seniors             = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['message']             = $this->message;
        $json['bulkProductTypeUuid'] = $this->bulkProductTypeUuid;
        $json['adults']              = $this->adults;
        $json['children']            = $this->children;
        $json['seniors']             = $this->seniors;

        return $json;
    }
}
