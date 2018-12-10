<?php
/*
 * BmgApiV2
 *
 * This file was automatically generated for bmg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BmgApiV2Lib\Models;

use JsonSerializable;
use BmgApiV2Lib\Utils\DateTimeHelper;

/**
 *
 * @todo Write general description for this model
 */
class ProductList implements JsonSerializable
{
    /**
     * UUID of product
     *
     * @required
     * @var      string $uuid public property
     */
    public $uuid;

    /**
     * Date
     *
     * @required
     * @factory  \BmgApiV2Lib\Utils\DateTimeHelper::fromSqlDateTime
     * @var      \DateTime $updatedAt public property
     */
    public $updatedAt;

    /**
     * Product title
     *
     * @required
     * @var      string $title public property
     */
    public $title;

    /**
     * Product title translated to langueage provided as parameter
     *
     * @required
     * @var      string $titleTranslated public property
     */
    public $titleTranslated;

    /**
     * base price - average price for marketing purposes
     *
     * @required
     * @var      double $basePrice public property
     */
    public $basePrice;

    /**
     * Activity type name
     *
     * @required
     * @var      string $typeName public property
     */
    public $typeName;

    /**
     * Activity type UUID
     *
     * @required
     * @var      string $typeUuid public property
     */
    public $typeUuid;

    /**
     * HATOAS links
     *
     * @required
     * @var      \BmgApiV2Lib\Models\LinkBasicArray[] $links public property
     */
    public $links;

    /**
     * Valid from date
     *
     * @var string|null $validFrom public property
     */
    public $validFrom;

    /**
     * Valid trough date
     *
     * @factory \BmgApiV2Lib\Utils\DateTimeHelper::fromSimpleDate
     * @var     \DateTime|null $validThrough public property
     */
    public $validThrough;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string    $uuid            Initialization value for $this->uuid
     * @param \DateTime $updatedAt       Initialization value for $this->updatedAt
     * @param string    $title           Initialization value for $this->title
     * @param string    $titleTranslated Initialization value for $this->titleTranslated
     * @param double    $basePrice       Initialization value for $this->basePrice
     * @param string    $typeName        Initialization value for $this->typeName
     * @param string    $typeUuid        Initialization value for $this->typeUuid
     * @param array     $links           Initialization value for $this->links
     * @param string    $validFrom       Initialization value for $this->validFrom
     * @param \DateTime $validThrough    Initialization value for $this->validThrough
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->uuid            = func_get_arg(0);
            $this->updatedAt       = func_get_arg(1);
            $this->title           = func_get_arg(2);
            $this->titleTranslated = func_get_arg(3);
            $this->basePrice       = func_get_arg(4);
            $this->typeName        = func_get_arg(5);
            $this->typeUuid        = func_get_arg(6);
            $this->links           = func_get_arg(7);
            $this->validFrom       = func_get_arg(8);
            $this->validThrough    = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['uuid']            = $this->uuid;
        $json['updatedAt']       = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        $json['title']           = $this->title;
        $json['titleTranslated'] = $this->titleTranslated;
        $json['basePrice']       = $this->basePrice;
        $json['typeName']        = $this->typeName;
        $json['typeUuid']        = $this->typeUuid;
        $json['links']           = $this->links;
        $json['validFrom']       = $this->validFrom;
        $json['validThrough']    = isset($this->validThrough) ?
            DateTimeHelper::toSimpleDate($this->validThrough) : null;

        return $json;
    }
}
