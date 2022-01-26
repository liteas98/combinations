<?php

namespace Liteas98\Combinations;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Liteas98\Combinations\Skeleton\SkeletonClass
 */
class CombinationsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'combinations';
    }
}
