<?php

namespace Gclove\Thrift\Contracts;

interface ThriftClient
{
    /**
     * @param string $name
     * @return mixed
     */
    public function with($name);
}
