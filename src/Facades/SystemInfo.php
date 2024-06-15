<?php

namespace Rmsramos\SystemInfo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rmsramos\SystemInfo\SystemInfo
 */
class SystemInfo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rmsramos\SystemInfo\SystemInfo::class;
    }
}
