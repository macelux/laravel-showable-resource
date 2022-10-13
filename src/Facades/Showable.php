<?php

namespace Showable\Showable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Showable\Showable\Showable
 */
class Showable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Showable\Showable\Showable::class;
    }
}
