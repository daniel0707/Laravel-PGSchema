<?php

namespace Jhonn921007\Schemas\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class PGSchema
 *
 * @package Pacuna\Schemas\Facades
 */
class PGSchema extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pgschema';
    }
}
