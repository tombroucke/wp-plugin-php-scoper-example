<?php

namespace PhpScoperExampleVendor\Illuminate\Contracts\Container;

use Exception;
use PhpScoperExampleVendor\Psr\Container\ContainerExceptionInterface;
/** @internal */
class CircularDependencyException extends Exception implements ContainerExceptionInterface
{
    //
}
