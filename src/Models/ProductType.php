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
class ProductType implements JsonSerializable
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
     * @var      string $durationDays public property
     */
    public $durationDays;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $durationHours public property
     */
    public $durationHours;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $durationMinutes public property
     */
    public $durationMinutes;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $daysInAdvance public property
     */
    public $daysInAdvance;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      bool $isNonRefundable public property
     */
    public $isNonRefundable;

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
     * @var      integer $minAdultAge public property
     */
    public $minAdultAge;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $maxAdultAge public property
     */
    public $maxAdultAge;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      bool $hasChildPrice public property
     */
    public $hasChildPrice;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      bool $allowChildren public property
     */
    public $allowChildren;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $minChildren public property
     */
    public $minChildren;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $maxChildren public property
     */
    public $maxChildren;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $minChildAge public property
     */
    public $minChildAge;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $maxChildAge public property
     */
    public $maxChildAge;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      bool $allowSeniors public property
     */
    public $allowSeniors;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $minSeniors public property
     */
    public $minSeniors;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $maxSeniors public property
     */
    public $maxSeniors;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $minSeniorAge public property
     */
    public $minSeniorAge;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $maxSeniorAge public property
     */
    public $maxSeniorAge;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      bool $allowInfant public property
     */
    public $allowInfant;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $minInfantAge public property
     */
    public $minInfantAge;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $maxInfantAge public property
     */
    public $maxInfantAge;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $maxGroup public property
     */
    public $maxGroup;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $minGroup public property
     */
    public $minGroup;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      bool $instantConfirmation public property
     */
    public $instantConfirmation;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      bool $nonInstantVoucher public property
     */
    public $nonInstantVoucher;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      bool $directAdmission public property
     */
    public $directAdmission;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $voucherUse public property
     */
    public $voucherUse;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $voucherUseTranslated public property
     */
    public $voucherUseTranslated;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $voucherRedemptionAddress public property
     */
    public $voucherRedemptionAddress;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $voucherRedemptionAddressTranslated public property
     */
    public $voucherRedemptionAddressTranslated;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      bool $voucherRequiresPrinting public property
     */
    public $voucherRequiresPrinting;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $meetingTime public property
     */
    public $meetingTime;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $meetingAddress public property
     */
    public $meetingAddress;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $meetingLocation public property
     */
    public $meetingLocation;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      string $meetingLocationTranslated public property
     */
    public $meetingLocationTranslated;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      array $cancellationPolicies public property
     */
    public $cancellationPolicies;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      double $recommendedMarkup public property
     */
    public $recommendedMarkup;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $adultParityPrice public property
     */
    public $adultParityPrice;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $childParityPrice public property
     */
    public $childParityPrice;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      integer $seniorParityPrice public property
     */
    public $seniorParityPrice;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      \BmgApiV2Lib\Models\ValidityProduct $validity public property
     */
    public $validity;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      array $timeslots public property
     */
    public $timeslots;

    /**
     *
     * @todo     Write general description for this property
     * @required
     * @var      array $options public property
     */
    public $options;

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
     * @param string          $uuid                               Initialization value for $this->uuid
     * @param string          $title                              Initialization value for $this->title
     * @param string          $titleTranslated                    Initialization value for $this->titleTranslated
     * @param string          $description                        Initialization value for $this->description
     * @param string          $descriptionTranslated              Initialization value for $this-
     *                                                            >descriptionTranslated
     * @param string          $durationDays                       Initialization value for $this->durationDays
     * @param integer         $durationHours                      Initialization value for $this->durationHours
     * @param integer         $durationMinutes                    Initialization value for $this->durationMinutes
     * @param string          $daysInAdvance                      Initialization value for $this->daysInAdvance
     * @param bool            $isNonRefundable                    Initialization value for $this->isNonRefundable
     * @param integer         $minPax                             Initialization value for $this->minPax
     * @param integer         $maxPax                             Initialization value for $this->maxPax
     * @param integer         $minAdultAge                        Initialization value for $this->minAdultAge
     * @param integer         $maxAdultAge                        Initialization value for $this->maxAdultAge
     * @param bool            $hasChildPrice                      Initialization value for $this->hasChildPrice
     * @param bool            $allowChildren                      Initialization value for $this->allowChildren
     * @param integer         $minChildren                        Initialization value for $this->minChildren
     * @param integer         $maxChildren                        Initialization value for $this->maxChildren
     * @param integer         $minChildAge                        Initialization value for $this->minChildAge
     * @param integer         $maxChildAge                        Initialization value for $this->maxChildAge
     * @param bool            $allowSeniors                       Initialization value for $this->allowSeniors
     * @param string          $minSeniors                         Initialization value for $this->minSeniors
     * @param string          $maxSeniors                         Initialization value for $this->maxSeniors
     * @param string          $minSeniorAge                       Initialization value for $this->minSeniorAge
     * @param string          $maxSeniorAge                       Initialization value for $this->maxSeniorAge
     * @param bool            $allowInfant                        Initialization value for $this->allowInfant
     * @param integer         $minInfantAge                       Initialization value for $this->minInfantAge
     * @param integer         $maxInfantAge                       Initialization value for $this->maxInfantAge
     * @param string          $maxGroup                           Initialization value for $this->maxGroup
     * @param string          $minGroup                           Initialization value for $this->minGroup
     * @param bool            $instantConfirmation                Initialization value for $this->instantConfirmation
     * @param bool            $nonInstantVoucher                  Initialization value for $this->nonInstantVoucher
     * @param bool            $directAdmission                    Initialization value for $this->directAdmission
     * @param string          $voucherUse                         Initialization value for $this->voucherUse
     * @param string          $voucherUseTranslated               Initialization value for $this-
     *                                                            >voucherUseTranslated
     * @param string          $voucherRedemptionAddress           Initialization value for $this-
     *                                                            >voucherRedemptionAddress
     * @param string          $voucherRedemptionAddressTranslated Initialization value for $this-
     *                                                            >voucherRedemptionAddressTranslated
     * @param bool            $voucherRequiresPrinting            Initialization value for $this-
     *                                                            >voucherRequiresPrinting
     * @param string          $meetingTime                        Initialization value for $this->meetingTime
     * @param string          $meetingAddress                     Initialization value for $this->meetingAddress
     * @param string          $meetingLocation                    Initialization value for $this->meetingLocation
     * @param string          $meetingLocationTranslated          Initialization value for $this-
     *                                                            >meetingLocationTranslated
     * @param array           $cancellationPolicies               Initialization value for $this-
     *                                                            >cancellationPolicies
     * @param double          $recommendedMarkup                  Initialization value for $this->recommendedMarkup
     * @param integer         $adultParityPrice                   Initialization value for $this->adultParityPrice
     * @param integer         $childParityPrice                   Initialization value for $this->childParityPrice
     * @param integer         $seniorParityPrice                  Initialization value for $this->seniorParityPrice
     * @param ValidityProduct $validity                           Initialization value for $this->validity
     * @param array           $timeslots                          Initialization value for $this->timeslots
     * @param array           $options                            Initialization value for $this->options
     * @param array           $links                              Initialization value for $this->links
     */
    public function __construct()
    {
        if (51 == func_num_args()) {
            $this->uuid                               = func_get_arg(0);
            $this->title                              = func_get_arg(1);
            $this->titleTranslated                    = func_get_arg(2);
            $this->description                        = func_get_arg(3);
            $this->descriptionTranslated              = func_get_arg(4);
            $this->durationDays                       = func_get_arg(5);
            $this->durationHours                      = func_get_arg(6);
            $this->durationMinutes                    = func_get_arg(7);
            $this->daysInAdvance                      = func_get_arg(8);
            $this->isNonRefundable                    = func_get_arg(9);
            $this->minPax                             = func_get_arg(10);
            $this->maxPax                             = func_get_arg(11);
            $this->minAdultAge                        = func_get_arg(12);
            $this->maxAdultAge                        = func_get_arg(13);
            $this->hasChildPrice                      = func_get_arg(14);
            $this->allowChildren                      = func_get_arg(15);
            $this->minChildren                        = func_get_arg(16);
            $this->maxChildren                        = func_get_arg(17);
            $this->minChildAge                        = func_get_arg(18);
            $this->maxChildAge                        = func_get_arg(19);
            $this->allowSeniors                       = func_get_arg(20);
            $this->minSeniors                         = func_get_arg(21);
            $this->maxSeniors                         = func_get_arg(22);
            $this->minSeniorAge                       = func_get_arg(23);
            $this->maxSeniorAge                       = func_get_arg(24);
            $this->allowInfant                        = func_get_arg(25);
            $this->minInfantAge                       = func_get_arg(26);
            $this->maxInfantAge                       = func_get_arg(27);
            $this->maxGroup                           = func_get_arg(28);
            $this->minGroup                           = func_get_arg(29);
            $this->instantConfirmation                = func_get_arg(30);
            $this->nonInstantVoucher                  = func_get_arg(31);
            $this->directAdmission                    = func_get_arg(32);
            $this->voucherUse                         = func_get_arg(33);
            $this->voucherUseTranslated               = func_get_arg(34);
            $this->voucherRedemptionAddress           = func_get_arg(35);
            $this->voucherRedemptionAddressTranslated = func_get_arg(36);
            $this->voucherRequiresPrinting            = func_get_arg(37);
            $this->meetingTime                        = func_get_arg(38);
            $this->meetingAddress                     = func_get_arg(39);
            $this->meetingLocation                    = func_get_arg(40);
            $this->meetingLocationTranslated          = func_get_arg(41);
            $this->cancellationPolicies               = func_get_arg(42);
            $this->recommendedMarkup                  = func_get_arg(43);
            $this->adultParityPrice                   = func_get_arg(44);
            $this->childParityPrice                   = func_get_arg(45);
            $this->seniorParityPrice                  = func_get_arg(46);
            $this->validity                           = func_get_arg(47);
            $this->timeslots                          = func_get_arg(48);
            $this->options                            = func_get_arg(49);
            $this->links                              = func_get_arg(50);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['uuid']                               = $this->uuid;
        $json['title']                              = $this->title;
        $json['titleTranslated']                    = $this->titleTranslated;
        $json['description']                        = $this->description;
        $json['descriptionTranslated']              = $this->descriptionTranslated;
        $json['durationDays']                       = $this->durationDays;
        $json['durationHours']                      = $this->durationHours;
        $json['durationMinutes']                    = $this->durationMinutes;
        $json['daysInAdvance']                      = $this->daysInAdvance;
        $json['isNonRefundable']                    = $this->isNonRefundable;
        $json['minPax']                             = $this->minPax;
        $json['maxPax']                             = $this->maxPax;
        $json['minAdultAge']                        = $this->minAdultAge;
        $json['maxAdultAge']                        = $this->maxAdultAge;
        $json['hasChildPrice']                      = $this->hasChildPrice;
        $json['allowChildren']                      = $this->allowChildren;
        $json['minChildren']                        = $this->minChildren;
        $json['maxChildren']                        = $this->maxChildren;
        $json['minChildAge']                        = $this->minChildAge;
        $json['maxChildAge']                        = $this->maxChildAge;
        $json['allowSeniors']                       = $this->allowSeniors;
        $json['minSeniors']                         = $this->minSeniors;
        $json['maxSeniors']                         = $this->maxSeniors;
        $json['minSeniorAge']                       = $this->minSeniorAge;
        $json['maxSeniorAge']                       = $this->maxSeniorAge;
        $json['allowInfant']                        = $this->allowInfant;
        $json['minInfantAge']                       = $this->minInfantAge;
        $json['maxInfantAge']                       = $this->maxInfantAge;
        $json['maxGroup']                           = $this->maxGroup;
        $json['minGroup']                           = $this->minGroup;
        $json['instantConfirmation']                = $this->instantConfirmation;
        $json['nonInstantVoucher']                  = $this->nonInstantVoucher;
        $json['directAdmission']                    = $this->directAdmission;
        $json['voucherUse']                         = $this->voucherUse;
        $json['voucherUseTranslated']               = $this->voucherUseTranslated;
        $json['voucherRedemptionAddress']           = $this->voucherRedemptionAddress;
        $json['voucherRedemptionAddressTranslated'] = $this->voucherRedemptionAddressTranslated;
        $json['voucherRequiresPrinting']            = $this->voucherRequiresPrinting;
        $json['meetingTime']                        = $this->meetingTime;
        $json['meetingAddress']                     = $this->meetingAddress;
        $json['meetingLocation']                    = $this->meetingLocation;
        $json['meetingLocationTranslated']          = $this->meetingLocationTranslated;
        $json['cancellationPolicies']               = $this->cancellationPolicies;
        $json['recommendedMarkup']                  = $this->recommendedMarkup;
        $json['adultParityPrice']                   = $this->adultParityPrice;
        $json['childParityPrice']                   = $this->childParityPrice;
        $json['seniorParityPrice']                  = $this->seniorParityPrice;
        $json['validity']                           = $this->validity;
        $json['timeslots']                          = $this->timeslots;
        $json['options']                            = $this->options;
        $json['links']                              = $this->links;

        return $json;
    }
}
