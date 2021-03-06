<?php

namespace Digitonic\IexCloudSdk\Facades\InvestorsExchangeData\Deep;

use Illuminate\Support\Facades\Facade;

class Auction extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Digitonic\IexCloudSdk\InvestorsExchangeData\Deep\Auction::class;
    }
}
