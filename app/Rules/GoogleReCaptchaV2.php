<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Http;

class GoogleReCaptchaV2 implements Rule
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
        $response = Http::get("https://www.google.com/recaptcha/api/siteverify",[
            'secret' => config('app.recaptcha_secret'),
            'response' => $value
        ]);

        return $response->json()["success"];
    }
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('validation.recaptcha');
    }
}
