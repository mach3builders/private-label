<?php

namespace Mach3builders\PrivateLabel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mach3builders\PrivateLabel\Skeleton\SkeletonClass
 */
class PrivateLabel extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'private-label';
    }
}
