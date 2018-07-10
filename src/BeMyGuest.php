<?php

namespace BmgApiV2Lib;

class BeMyGuest extends BmgApiV2Client
{
    /**
     * Initialise with authentication and environment.
     *
     * @param string $xAuthorization
     * @param string $environment
     *
     * @return void
     */
    public function __construct($xAuthorization = null, $environment = null)
    {
        Configuration::$environment = $environment ?? Environments::DEMO;

        parent::__construct($xAuthorization);
    }
}
