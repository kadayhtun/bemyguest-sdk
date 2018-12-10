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
class ProductDetailsData implements JsonSerializable
{
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
     * @factory  \BmgApiV2Lib\Utils\DateTimeHelper::fromSqlDateTime
     * @var      \DateTime $updatedAt public property
     */
    public $updatedAt;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $title public property
     */
    public $title;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $titleTranslated public property
     */
    public $titleTranslated;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $description public property
     */
    public $description;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $descriptionTranslated public property
     */
    public $descriptionTranslated;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $highlights public property
     */
    public $highlights;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $highlightsTranslated public property
     */
    public $highlightsTranslated;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $additionalInfo public property
     */
    public $additionalInfo;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $additionalInfoTranslated public property
     */
    public $additionalInfoTranslated;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $priceIncludes public property
     */
    public $priceIncludes;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $priceIncludesTranslated public property
     */
    public $priceIncludesTranslated;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $priceExcludes public property
     */
    public $priceExcludes;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $priceExcludesTranslated public property
     */
    public $priceExcludesTranslated;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @factory  \BmgApiV2Lib\Utils\DateTimeHelper::fromSimpleDate
     * @var      \DateTime $validFrom public property
     */
    public $validFrom;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @factory  \BmgApiV2Lib\Utils\DateTimeHelper::fromSimpleDate
     * @var      \DateTime $validThrough public property
     */
    public $validThrough;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $itinerary public property
     */
    public $itinerary;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $itineraryTranslated public property
     */
    public $itineraryTranslated;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $warnings public property
     */
    public $warnings;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $warningsTranslated public property
     */
    public $warningsTranslated;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $safety public property
     */
    public $safety;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $safetyTranslated public property
     */
    public $safetyTranslated;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $latitude public property
     */
    public $latitude;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $longitude public property
     */
    public $longitude;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $minPax public property
     */
    public $minPax;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $maxPax public property
     */
    public $maxPax;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      double $basePrice public property
     */
    public $basePrice;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      \BmgApiV2Lib\Models\CurrencyDetails $currency public property
     */
    public $currency;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      bool $isFlatPaxPrice public property
     */
    public $isFlatPaxPrice;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $reviewCount public property
     */
    public $reviewCount;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      double $reviewAverageScore public property
     */
    public $reviewAverageScore;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $typeName public property
     */
    public $typeName;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $typeUuid public property
     */
    public $typeUuid;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $photosUrl public property
     */
    public $photosUrl;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $businessHoursFrom public property
     */
    public $businessHoursFrom;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $businessHoursTo public property
     */
    public $businessHoursTo;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $averageDelivery public property
     */
    public $averageDelivery;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      bool $hotelPickup public property
     */
    public $hotelPickup;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      bool $airportPickup public property
     */
    public $airportPickup;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      \BmgApiV2Lib\Models\PhotoDetails[] $photos public property
     */
    public $photos;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      \BmgApiV2Lib\Models\CategoriesData[] $categories public property
     */
    public $categories;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      \BmgApiV2Lib\Models\LocationStruct[] $locations public property
     */
    public $locations;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $url public property
     */
    public $url;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $staticUrl public property
     */
    public $staticUrl;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      object $guideLanguages public property
     */
    public $guideLanguages;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      \BmgApiV2Lib\Models\AudioHeadsetLanguage[] $audioHeadsetLanguages public property
     */
    public $audioHeadsetLanguages;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      \BmgApiV2Lib\Models\WrittenLanguageDetails[] $writtenLanguages public property
     */
    public $writtenLanguages;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      \BmgApiV2Lib\Models\LinkBasicArray[] $links public property
     */
    public $links;

    /**
     * Constructor to set initial or default values of member properties
     *
     * @param string          $uuid                     Initialization value for $this->uuid
     * @param \DateTime       $updatedAt                Initialization value for $this->updatedAt
     * @param string          $title                    Initialization value for $this->title
     * @param string          $titleTranslated          Initialization value for $this->titleTranslated
     * @param string          $description              Initialization value for $this->description
     * @param string          $descriptionTranslated    Initialization value for $this->descriptionTranslated
     * @param string          $highlights               Initialization value for $this->highlights
     * @param string          $highlightsTranslated     Initialization value for $this->highlightsTranslated
     * @param string          $additionalInfo           Initialization value for $this->additionalInfo
     * @param string          $additionalInfoTranslated Initialization value for $this->additionalInfoTranslated
     * @param string          $priceIncludes            Initialization value for $this->priceIncludes
     * @param string          $priceIncludesTranslated  Initialization value for $this->priceIncludesTranslated
     * @param string          $priceExcludes            Initialization value for $this->priceExcludes
     * @param string          $priceExcludesTranslated  Initialization value for $this->priceExcludesTranslated
     * @param \DateTime       $validFrom                Initialization value for $this->validFrom
     * @param \DateTime       $validThrough             Initialization value for $this->validThrough
     * @param string          $itinerary                Initialization value for $this->itinerary
     * @param string          $itineraryTranslated      Initialization value for $this->itineraryTranslated
     * @param string          $warnings                 Initialization value for $this->warnings
     * @param string          $warningsTranslated       Initialization value for $this->warningsTranslated
     * @param string          $safety                   Initialization value for $this->safety
     * @param string          $safetyTranslated         Initialization value for $this->safetyTranslated
     * @param string          $latitude                 Initialization value for $this->latitude
     * @param string          $longitude                Initialization value for $this->longitude
     * @param integer         $minPax                   Initialization value for $this->minPax
     * @param integer         $maxPax                   Initialization value for $this->maxPax
     * @param double          $basePrice                Initialization value for $this->basePrice
     * @param CurrencyDetails $currency                 Initialization value for $this->currency
     * @param bool            $isFlatPaxPrice           Initialization value for $this->isFlatPaxPrice
     * @param integer         $reviewCount              Initialization value for $this->reviewCount
     * @param double          $reviewAverageScore       Initialization value for $this->reviewAverageScore
     * @param string          $typeName                 Initialization value for $this->typeName
     * @param string          $typeUuid                 Initialization value for $this->typeUuid
     * @param string          $photosUrl                Initialization value for $this->photosUrl
     * @param string          $businessHoursFrom        Initialization value for $this->businessHoursFrom
     * @param string          $businessHoursTo          Initialization value for $this->businessHoursTo
     * @param integer         $averageDelivery          Initialization value for $this->averageDelivery
     * @param bool            $hotelPickup              Initialization value for $this->hotelPickup
     * @param bool            $airportPickup            Initialization value for $this->airportPickup
     * @param array           $photos                   Initialization value for $this->photos
     * @param array           $categories               Initialization value for $this->categories
     * @param array           $locations                Initialization value for $this->locations
     * @param string          $url                      Initialization value for $this->url
     * @param string          $staticUrl                Initialization value for $this->staticUrl
     * @param object          $guideLanguages           Initialization value for $this->guideLanguages
     * @param array           $audioHeadsetLanguages    Initialization value for $this->audioHeadsetLanguages
     * @param array           $writtenLanguages         Initialization value for $this->writtenLanguages
     * @param array           $links                    Initialization value for $this->links
     */
    public function __construct()
    {
        if (48 == func_num_args()) {
            $this->uuid                     = func_get_arg(0);
            $this->updatedAt                = func_get_arg(1);
            $this->title                    = func_get_arg(2);
            $this->titleTranslated          = func_get_arg(3);
            $this->description              = func_get_arg(4);
            $this->descriptionTranslated    = func_get_arg(5);
            $this->highlights               = func_get_arg(6);
            $this->highlightsTranslated     = func_get_arg(7);
            $this->additionalInfo           = func_get_arg(8);
            $this->additionalInfoTranslated = func_get_arg(9);
            $this->priceIncludes            = func_get_arg(10);
            $this->priceIncludesTranslated  = func_get_arg(11);
            $this->priceExcludes            = func_get_arg(12);
            $this->priceExcludesTranslated  = func_get_arg(13);
            $this->validFrom                = func_get_arg(14);
            $this->validThrough             = func_get_arg(15);
            $this->itinerary                = func_get_arg(16);
            $this->itineraryTranslated      = func_get_arg(17);
            $this->warnings                 = func_get_arg(18);
            $this->warningsTranslated       = func_get_arg(19);
            $this->safety                   = func_get_arg(20);
            $this->safetyTranslated         = func_get_arg(21);
            $this->latitude                 = func_get_arg(22);
            $this->longitude                = func_get_arg(23);
            $this->minPax                   = func_get_arg(24);
            $this->maxPax                   = func_get_arg(25);
            $this->basePrice                = func_get_arg(26);
            $this->currency                 = func_get_arg(27);
            $this->isFlatPaxPrice           = func_get_arg(28);
            $this->reviewCount              = func_get_arg(29);
            $this->reviewAverageScore       = func_get_arg(30);
            $this->typeName                 = func_get_arg(31);
            $this->typeUuid                 = func_get_arg(32);
            $this->photosUrl                = func_get_arg(33);
            $this->businessHoursFrom        = func_get_arg(34);
            $this->businessHoursTo          = func_get_arg(35);
            $this->averageDelivery          = func_get_arg(36);
            $this->hotelPickup              = func_get_arg(37);
            $this->airportPickup            = func_get_arg(38);
            $this->photos                   = func_get_arg(39);
            $this->categories               = func_get_arg(40);
            $this->locations                = func_get_arg(41);
            $this->url                      = func_get_arg(42);
            $this->staticUrl                = func_get_arg(43);
            $this->guideLanguages           = func_get_arg(44);
            $this->audioHeadsetLanguages    = func_get_arg(45);
            $this->writtenLanguages         = func_get_arg(46);
            $this->links                    = func_get_arg(47);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['uuid']                     = $this->uuid;
        $json['updatedAt']                = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        $json['title']                    = $this->title;
        $json['titleTranslated']          = $this->titleTranslated;
        $json['description']              = $this->description;
        $json['descriptionTranslated']    = $this->descriptionTranslated;
        $json['highlights']               = $this->highlights;
        $json['highlightsTranslated']     = $this->highlightsTranslated;
        $json['additionalInfo']           = $this->additionalInfo;
        $json['additionalInfoTranslated'] = $this->additionalInfoTranslated;
        $json['priceIncludes']            = $this->priceIncludes;
        $json['priceIncludesTranslated']  = $this->priceIncludesTranslated;
        $json['priceExcludes']            = $this->priceExcludes;
        $json['priceExcludesTranslated']  = $this->priceExcludesTranslated;
        $json['validFrom']                = DateTimeHelper::toSimpleDate($this->validFrom);
        $json['validThrough']             = DateTimeHelper::toSimpleDate($this->validThrough);
        $json['itinerary']                = $this->itinerary;
        $json['itineraryTranslated']      = $this->itineraryTranslated;
        $json['warnings']                 = $this->warnings;
        $json['warningsTranslated']       = $this->warningsTranslated;
        $json['safety']                   = $this->safety;
        $json['safetyTranslated']         = $this->safetyTranslated;
        $json['latitude']                 = $this->latitude;
        $json['longitude']                = $this->longitude;
        $json['minPax']                   = $this->minPax;
        $json['maxPax']                   = $this->maxPax;
        $json['basePrice']                = $this->basePrice;
        $json['currency']                 = $this->currency;
        $json['isFlatPaxPrice']           = $this->isFlatPaxPrice;
        $json['reviewCount']              = $this->reviewCount;
        $json['reviewAverageScore']       = $this->reviewAverageScore;
        $json['typeName']                 = $this->typeName;
        $json['typeUuid']                 = $this->typeUuid;
        $json['photosUrl']                = $this->photosUrl;
        $json['businessHoursFrom']        = $this->businessHoursFrom;
        $json['businessHoursTo']          = $this->businessHoursTo;
        $json['averageDelivery']          = $this->averageDelivery;
        $json['hotelPickup']              = $this->hotelPickup;
        $json['airportPickup']            = $this->airportPickup;
        $json['photos']                   = $this->photos;
        $json['categories']               = $this->categories;
        $json['locations']                = $this->locations;
        $json['url']                      = $this->url;
        $json['staticUrl']                = $this->staticUrl;
        $json['guideLanguages']           = $this->guideLanguages;
        $json['audioHeadsetLanguages']    = $this->audioHeadsetLanguages;
        $json['writtenLanguages']         = $this->writtenLanguages;
        $json['links']                    = $this->links;

        return $json;
    }
}
