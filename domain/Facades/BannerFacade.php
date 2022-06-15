<?php

namespace domain\Facades;

use domain\services\BannerService;
use Illuminate\Support\Facades\Facade;

class BannerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return BannerService::class;
    }

}
