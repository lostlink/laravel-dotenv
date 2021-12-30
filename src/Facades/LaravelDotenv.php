<?php

namespace Lostlink\LaravelDotenv\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lostlink\LaravelDotenv\LaravelDotenv
 */
class LaravelDotenv extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-dotenv';
    }
}
