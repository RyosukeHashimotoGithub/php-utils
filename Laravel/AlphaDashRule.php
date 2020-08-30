<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AlphaDashRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // 日本語対応alpha_dash
        return preg_match('/^[A-Za-z\d_-]+$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ':attributeはアルファベットとダッシュ(-)及び下線(_)が入力できます。';
    }
}
