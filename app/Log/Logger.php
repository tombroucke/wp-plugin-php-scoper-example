<?php

namespace Otomaties\PhpScoperExample\Log;

use PhpScoperExampleVendor\Psr\Log\AbstractLogger;
use PhpScoperExampleVendor\Psr\Log\LogLevel;

class Logger extends AbstractLogger
{
    /**
     * System is unusable.
     *
     *
     * @return void
     */
    public function emergency(string|\Stringable $message, array $context = [])
    {
        $this->log(LogLevel::EMERGENCY, $message, $context);
    }

    /**
     * Log smth
     *
     * @param  string  $level
     * @param  array<mixed>  $context
     * @return void
     */
    public function log($level, string|\Stringable $message, array $context = [])
    {
        var_dump("[$level] $message", $context);
    }
}
