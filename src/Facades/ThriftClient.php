<?php

namespace Gclove\Thrift\Facades;

use Illuminate\Support\Facades\Facade;
use Gclove\Thrift\Contracts\ThriftClient as BaseThriftClient;

/**
 * @see \Gclove\Thrift\Contracts\ThriftClient
 */
class ThriftClient extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseThriftClient::class;
    }
}
