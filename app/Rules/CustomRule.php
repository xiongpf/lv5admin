<?php
/**
 * 5.5新验证规则
 */
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CustomRule implements Rule
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
        if($attribute=='name'){
            return $value=='18888873646';
        }

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {

        return '手机号不正确';
    }
}
