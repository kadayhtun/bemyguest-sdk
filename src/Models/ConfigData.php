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
class ConfigData implements JsonSerializable
{
    /**
     * Time
     *
     * @required
     * @var      \BmgApiV2Lib\Models\Now $now public property
     */
    public $now;

    /**
     * API version
     *
     * @required
     * @var      integer $version public property
     */
    public $version;

    /**
     * Api Server URL
     *
     * @required
     * @var      string $serverUrl public property
     */
    public $serverUrl;

    /**
     * Photos URL
     *
     * @required
     * @var      string $photosUrl public property
     */
    public $photosUrl;

    /**
     * Activiesites default sorting
     *
     * @required
     * @var      array $activitiesSorting public property
     */
    public $activitiesSorting;

    /**
     * User details (booking contact)
     *
     * @required
     * @var      \BmgApiV2Lib\Models\User $user public property
     */
    public $user;

    /**
     * Languages object
     *
     * @required
     * @var      \BmgApiV2Lib\Models\Languages $languages public property
     */
    public $languages;

    /**
     * Currencies object
     *
     * @required
     * @var      \BmgApiV2Lib\Models\Currencies $currencies public property
     */
    public $currencies;

    /**
     * Product type
     *
     * @required
     * @var      \BmgApiV2Lib\Models\AcitivityTypes $types public property
     */
    public $types;

    /**
     * Categories object
     *
     * @required
     * @var      \BmgApiV2Lib\Models\Categories $categories public property
     */
    public $categories;

    /**
     * Locations object
     *
     * @required
     * @var      \BmgApiV2Lib\Models\Locations $locations public property
     */
    public $locations;

    /**
     * Booking Options input types
     *
     * @required
     * @var      array $optionInputTypes public property
     */
    public $optionInputTypes;

    /**
     * Hatoas links
     *
     * @required
     * @var      \BmgApiV2Lib\Models\LinkBasicArray[] $links public property
     */
    public $links;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param Now            $now               Initialization value for $this->now
     * @param integer        $version           Initialization value for $this->version
     * @param string         $serverUrl         Initialization value for $this->serverUrl
     * @param string         $photosUrl         Initialization value for $this->photosUrl
     * @param array          $activitiesSorting Initialization value for $this->activitiesSorting
     * @param User           $user              Initialization value for $this->user
     * @param Languages      $languages         Initialization value for $this->languages
     * @param Currencies     $currencies        Initialization value for $this->currencies
     * @param AcitivityTypes $types             Initialization value for $this->types
     * @param Categories     $categories        Initialization value for $this->categories
     * @param Locations      $locations         Initialization value for $this->locations
     * @param array          $optionInputTypes  Initialization value for $this->optionInputTypes
     * @param array          $links             Initialization value for $this->links
     */
    public function __construct()
    {
        if (13 == func_num_args()) {
            $this->now               = func_get_arg(0);
            $this->version           = func_get_arg(1);
            $this->serverUrl         = func_get_arg(2);
            $this->photosUrl         = func_get_arg(3);
            $this->activitiesSorting = func_get_arg(4);
            $this->user              = func_get_arg(5);
            $this->languages         = func_get_arg(6);
            $this->currencies        = func_get_arg(7);
            $this->types             = func_get_arg(8);
            $this->categories        = func_get_arg(9);
            $this->locations         = func_get_arg(10);
            $this->optionInputTypes  = func_get_arg(11);
            $this->links             = func_get_arg(12);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['now']               = $this->now;
        $json['version']           = $this->version;
        $json['serverUrl']         = $this->serverUrl;
        $json['photosUrl']         = $this->photosUrl;
        $json['activitiesSorting'] = $this->activitiesSorting;
        $json['user']              = $this->user;
        $json['languages']         = $this->languages;
        $json['currencies']        = $this->currencies;
        $json['types']             = $this->types;
        $json['categories']        = $this->categories;
        $json['locations']         = $this->locations;
        $json['optionInputTypes']  = $this->optionInputTypes;
        $json['links']             = $this->links;

        return $json;
    }
}
