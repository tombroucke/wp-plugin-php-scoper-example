<?php

namespace Otomaties\PhpScoperExample;

use PhpScoperExampleVendor\Illuminate\Support\Collection;
use PhpScoperExampleVendor\Psr\Log\LogLevel;

class Plugin
{
    /**
     * @param  array<int, string>  $items
     */
    public function dumpCollection(array $items): self
    {
        var_dump(new Collection($items));

        return $this;
    }

    public function log(string $message): self
    {
        $logger = new Log\Logger;
        $logger->log(LogLevel::EMERGENCY, $message);

        return $this;
    }
}
