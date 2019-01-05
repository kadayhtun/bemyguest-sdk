<?php
/*
 * BmgApiV2
 *
 * This file was automatically generated for bmg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BmgApiV2Lib;

/**
 * All configuration including auth info and base URI for the API access
 * are configured in this class.
 */
class Configuration
{
    /**
     * The environment being used'
     *
     * @var string
     */
    public static $environment = Environments::DEMO;

    /**
     * Api Key
     *
     * @var string
     */
    public static $xAuthorization = '';

    /**
     * Root path of the project.
     *
     * @var string
     */
    public static $basePath = __DIR__ . "/..";

    /**
     * User agent path of the project.
     *
     * @var string
     */
    public static $userAgent = "APIMATIC 2.0";

    /**
     * Get the base uri for a given server in the current environment
     *
     * @param  string $server Server name
     * @return string         Base URI
     */
    public static function getBaseUri($server = Servers::BMG)
    {
        return APIHelper::appendUrlWithTemplateParameters(
            static::$environmentsMap[static::$environment][$server],
            array(
            )
        );
    }

    /**
     * A map of all baseurls used in different environments and servers
     *
     * @var array
     */
    private static $environmentsMap = [
        Environments::DEMO => [
            Servers::BMG => 'https://api.demo.bemyguest.com.sg',
        ],
        Environments::LIVE_PRODUCTION_ => [
            Servers::BMG => 'https://api.bemyguest.com.sg',
        ],
    ];
}
