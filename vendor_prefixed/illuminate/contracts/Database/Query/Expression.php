<?php

namespace PhpScoperExampleVendor\Illuminate\Contracts\Database\Query;

use PhpScoperExampleVendor\Illuminate\Database\Grammar;
/** @internal */
interface Expression
{
    /**
     * Get the value of the expression.
     *
     * @param  \Illuminate\Database\Grammar  $grammar
     * @return string|int|float
     */
    public function getValue(Grammar $grammar);
}
