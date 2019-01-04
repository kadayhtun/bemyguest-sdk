[![Build Status](https://travis-ci.org/chitminow/laravel-bmgv2.svg?branch=master)](https://travis-ci.org/chitminow/laravel-bmgv2)

# About

[BeMyGuest](https://bemyguest.com.sg/) release their PHP SDK of their API version 1 on [Packagist](https://packagist.org/packages/bemyguest/sdk-php).
But for verison 2, which is [https://apimatic.io](https://apimatic.io/) generated SDK, can be dowloaded [(here)](https://bemyguest.com.sg/p/api-console#/php-composer-library), not offers any other options other than downloading zip archive.
This package is aim to be another hosted package of BeMyGuest API version 2 with wrapper of [Laravel](https://laravel.com/) integration.

# Install

Run: `composer require oway-trip-group/laravel-bmgv2`

# Testing

Add below configuration into `phpunit.xml`. Replace `example-api-key` with BeMyGuest API key.

```xml
	<php>
    	<env name="BEMYGUEST_API_KEY" value="example-api-key" />
	</php>
```