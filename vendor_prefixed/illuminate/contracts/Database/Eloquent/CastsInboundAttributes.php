<?php

namespace PhpScoperExampleVendor\Illuminate\Contracts\Database\Eloquent;

use PhpScoperExampleVendor\Illuminate\Database\Eloquent\Model;
/** @internal */
interface CastsInboundAttributes
{
    /**
     * Transform the attribute to its underlying model values.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array<string, mixed>  $attributes
     * @return mixed
     */
    public function set(Model $model, string $key, mixed $value, array $attributes);
}
