<?php

namespace MichelMelo\LaravelSearch;

/**
 * Class Facade.
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * @inheritDoc
     */
    protected static function getFacadeAccessor()
    {
        return 'search';
    }
}
