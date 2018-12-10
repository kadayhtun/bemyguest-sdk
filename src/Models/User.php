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
class User implements JsonSerializable
{
    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $name public property
     */
    public $name;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $email public property
     */
    public $email;

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
     * @var      string $continueUrl public property
     */
    public $continueUrl;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $notifyUrl public property
     */
    public $notifyUrl;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $defaultPagination public property
     */
    public $defaultPagination;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $defaultSortBy public property
     */
    public $defaultSortBy;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $defaultCurrencyUuid public property
     */
    public $defaultCurrencyUuid;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $defaultCurrencyCode public property
     */
    public $defaultCurrencyCode;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $defaultLanguageUuid public property
     */
    public $defaultLanguageUuid;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $defaultLanguageCode public property
     */
    public $defaultLanguageCode;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      double $walletBalance public property
     */
    public $walletBalance;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $walletBlockedBalance public property
     */
    public $walletBlockedBalance;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      double $walletAvailableBalance public property
     */
    public $walletAvailableBalance;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $walletAlertValue public property
     */
    public $walletAlertValue;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string  $name                   Initialization value for $this->name
     * @param string  $email                  Initialization value for $this->email
     * @param string  $uuid                   Initialization value for $this->uuid
     * @param string  $continueUrl            Initialization value for $this->continueUrl
     * @param string  $notifyUrl              Initialization value for $this->notifyUrl
     * @param integer $defaultPagination      Initialization value for $this->defaultPagination
     * @param string  $defaultSortBy          Initialization value for $this->defaultSortBy
     * @param string  $defaultCurrencyUuid    Initialization value for $this->defaultCurrencyUuid
     * @param string  $defaultCurrencyCode    Initialization value for $this->defaultCurrencyCode
     * @param string  $defaultLanguageUuid    Initialization value for $this->defaultLanguageUuid
     * @param string  $defaultLanguageCode    Initialization value for $this->defaultLanguageCode
     * @param double  $walletBalance          Initialization value for $this->walletBalance
     * @param integer $walletBlockedBalance   Initialization value for $this->walletBlockedBalance
     * @param double  $walletAvailableBalance Initialization value for $this->walletAvailableBalance
     * @param integer $walletAlertValue       Initialization value for $this->walletAlertValue
     */
    public function __construct()
    {
        if (15 == func_num_args()) {
            $this->name                   = func_get_arg(0);
            $this->email                  = func_get_arg(1);
            $this->uuid                   = func_get_arg(2);
            $this->continueUrl            = func_get_arg(3);
            $this->notifyUrl              = func_get_arg(4);
            $this->defaultPagination      = func_get_arg(5);
            $this->defaultSortBy          = func_get_arg(6);
            $this->defaultCurrencyUuid    = func_get_arg(7);
            $this->defaultCurrencyCode    = func_get_arg(8);
            $this->defaultLanguageUuid    = func_get_arg(9);
            $this->defaultLanguageCode    = func_get_arg(10);
            $this->walletBalance          = func_get_arg(11);
            $this->walletBlockedBalance   = func_get_arg(12);
            $this->walletAvailableBalance = func_get_arg(13);
            $this->walletAlertValue       = func_get_arg(14);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']                   = $this->name;
        $json['email']                  = $this->email;
        $json['uuid']                   = $this->uuid;
        $json['continueUrl']            = $this->continueUrl;
        $json['notifyUrl']              = $this->notifyUrl;
        $json['defaultPagination']      = $this->defaultPagination;
        $json['defaultSortBy']          = $this->defaultSortBy;
        $json['defaultCurrencyUuid']    = $this->defaultCurrencyUuid;
        $json['defaultCurrencyCode']    = $this->defaultCurrencyCode;
        $json['defaultLanguageUuid']    = $this->defaultLanguageUuid;
        $json['defaultLanguageCode']    = $this->defaultLanguageCode;
        $json['walletBalance']          = $this->walletBalance;
        $json['walletBlockedBalance']   = $this->walletBlockedBalance;
        $json['walletAvailableBalance'] = $this->walletAvailableBalance;
        $json['walletAlertValue']       = $this->walletAlertValue;

        return $json;
    }
}
