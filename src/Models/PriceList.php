<?php
/*
 * BmgApiV2
 *
 * This file was automatically generated for bmg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BmgApiV2Lib\Models;

use DateTime;
use JsonSerializable;

class PriceList implements JsonSerializable
{
    /**
     *
     * @var \DateTime $date
     */
    public $date;

    /**
     *
     * @var string $weekday
     */
    public $weekday;

    /**
     *
     * @var boolean $available
     */
    public $available;

    /**
     *
     * @var string $currency
     */
    public $currency;

    /**
     *
     * @var \BmgApiV2Lib\Models\PriceDetails $prices
     */
    public $prices;

    /**
     *
     * @var \BmgApiV2Lib\Models\TimeslotProductType[] $timeslots
     */
    public $timeslots;

    /**
     *
     * @var \BmgApiV2Lib\Models\OptionProductType[] $options
     */
    public $options;

    /**
     *
     * @var \BmgApiV2Lib\Models\VoucherValidity $voucherValidity
     */
    public $voucherValidity;

    /**
     * HATOAS links
     *
     * @required
     * @var      \BmgApiV2Lib\Models\LinkBasicArray[] $links public property
     */
    public $links;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string                              $date
     * @param string                              $weekday
     * @param string                              $available
     * @param string                              $currency
     * @param \BmgApiV2Lib\Models\PriceDetails    $prices
     * @param array                               $timeslots
     * @param array                               $options
     * @param \BmgApiV2Lib\Models\VoucherValidity $voucherValidity
     * @param array                               $links
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->date = func_get_arg(0);
            $this->weekday = func_get_arg(1);
            $this->available = func_get_arg(2);
            $this->currency = func_get_arg(3);
            $this->prices = func_get_arg(4);
            $this->timeslots = func_get_arg(5);
            $this->options = func_get_arg(6);
            $this->voucherValidity = func_get_arg(7);
            $this->links = func_get_arg(8);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = [
            'date' => $this->date->format('Y-m-d'),
            'weekday' => $this->weekday,
            'available' => $this->available,
            'currency' => $this->currency,
            'prices' => $this->prices,
            'timeslots' => $this->timeslots,
            'options' => $this->options,
            'voucherValidity' => $this->voucherValidity,
            'links' => $this->links,
        ];

        return $json;
    }
}
