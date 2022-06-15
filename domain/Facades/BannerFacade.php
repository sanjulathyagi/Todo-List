<?php

namespace domain\Facades;

use Domain\services\BannerService;
use Illuminate\Support\Facades\Facade;

class BannerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return BannerService::class;
    }

}
