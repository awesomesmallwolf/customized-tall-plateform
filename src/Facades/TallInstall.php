<?php

namespace fredcarterwolf\TallInstall\Facades;

use Illuminate\Support\Facades\Facade;

class TallInstall extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tall-install';
    }
}
