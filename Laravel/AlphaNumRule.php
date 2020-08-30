<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AlphaNumRule implements Rule
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
        // 日本語対応alpha_num
        return preg_match('/^[A-Za-z\d]+$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ':attributeはアルファベット数字が入力できます。';
    }
}
