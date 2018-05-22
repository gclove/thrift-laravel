<?php

namespace Gclove\Thrift;

use Illuminate\Support\ServiceProvider;

class ThriftServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Gclove\Thrift\Contracts\ThriftServer', 'Gclove\Thrift\ThriftServerImpl');
        $this->app->singleton('Gclove\Thrift\Contracts\ThriftClient', 'Gclove\Thrift\ThriftClientImpl');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['Gclove\Thrift\Contracts\ThriftServer', 'Gclove\Thrift\Contracts\ThriftClient'];
    }
}
