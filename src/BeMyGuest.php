<?php

namespace BmgApiV2Lib;

use BadMethodCallException;

class BeMyGuest
{
    protected $client;

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

        $this->client = new BmgApiV2Client($xAuthorization);
    }

    public function __call($name, $arguments)
    {
        $method = substr($name, 0, 3) === 'get'
            ? $name
            : 'get' . ucfirst($name);

        if (method_exists($this->client, $method)) {
            return $this->client->$method();
        }

        throw new BadMethodCallException();
    }
}
