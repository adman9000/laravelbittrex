<?php
namespace adman9000\Bittrex;

use Illuminate\Support\Facades\Facade;

class Bittrex extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'bittrex';
    }
}
