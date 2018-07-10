<?php

namespace BmgApiV2Lib\Facades;

use Illuminate\Support\Facades\Facade as BaseFacade;

class BeMyGuest extends BaseFacade
{
    /**
     * Get the registered name of the component.
     * @see \BmgApiV2Lib\VBmgApiV2Client
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bemyguest';
    }
}
