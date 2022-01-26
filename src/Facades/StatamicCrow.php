<?php

namespace digiti\StatamicCrow\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \digiti\StatamicCrow\StatamicCrow
 */
class StatamicCrow extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'statamic-crow';
    }
}
