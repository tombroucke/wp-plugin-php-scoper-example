<?php

namespace PhpScoperExampleVendor\Illuminate\Contracts\Validation;

use PhpScoperExampleVendor\Illuminate\Validation\Validator;
/** @internal */
interface ValidatorAwareRule
{
    /**
     * Set the current validator.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return $this
     */
    public function setValidator(Validator $validator);
}
