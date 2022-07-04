<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'google' => [
        'recaptcha' => [
            'v3' => [
                'site_key' => env('GOOGLE_RECAPTCHA_V3_SITE', ''),
                'secret_key' => env('GOOGLE_RECAPTCHA_V3_SECRET', ''),
                'host' => env('GOOGLE_RECAPTCHA_V3_HOST', ''),
            ]
        ]
    ],

];
