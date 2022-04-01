<?php

declare(strict_types=1);

namespace Manuglopez\LaravelWooclient;

use Illuminate\Support\Facades\Facade;

class LaravelWooclientFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-wooclient';
    }
}
