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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [

        'client_id' => '202149532650-kch45gf6it5t2rjiga3j5arqme6rs26u.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/user/callback/google',
    ],

    'googleuser' => [

        'client_id' => '202149532650-kch45gf6it5t2rjiga3j5arqme6rs26u.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/user/callback/google',
    ],

    'googlevendor' => [

        'client_id' => '202149532650-kch45gf6it5t2rjiga3j5arqme6rs26u.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/vendor/callback/google',
    ],

];
