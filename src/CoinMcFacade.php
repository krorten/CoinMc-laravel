<?php

namespace Kroten\CoinMc;

use Illuminate\Support\Facades\Facade;

class CoinMcFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'CoinMc';
    }
}