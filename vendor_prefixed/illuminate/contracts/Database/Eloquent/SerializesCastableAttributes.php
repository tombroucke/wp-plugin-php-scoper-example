<?php

namespace PhpScoperExampleVendor\Illuminate\Contracts\Database\Eloquent;

use PhpScoperExampleVendor\Illuminate\Database\Eloquent\Model;
/** @internal */
interface SerializesCastableAttributes
{
    /**
     * Serialize the attribute when converting the model to an array.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array<string, mixed>  $attributes
     * @return mixed
     */
    public function serialize(Model $model, string $key, mixed $value, array $attributes);
}
