<?php

namespace BmgApiV2Lib\Facades;

use Illuminate\Support\Facades\Facade;

class BeMyGuest extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @see    \BmgApiV2Lib\BmgApiV2Client
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bemyguest';
    }
}
