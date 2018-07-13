<?php

namespace BmgApiV2Lib;

use Illuminate\Support\Facades\Facade as BaseFacade;

class Facade extends BaseFacade
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
