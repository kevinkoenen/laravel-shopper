<?php

namespace KevinKoenen\LaravelShopper;

use Illuminate\Support\Facades\Facade;

/**
 * @see \KevinKoenen\LaravelShopper\Skeleton\SkeletonClass
 */
class LaravelShopperFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-shopper';
    }
}
