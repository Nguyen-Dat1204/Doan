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
        'client_id' => '327668723390-slr0simit4v6l8tcs6t9s6cs1ndeiun2.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://dientu.com:8000/callback/google',
    ], 
    'facebook' => [
        'client_id' => '458654566066446',
        'client_secret' => '545bc0bc9d85b1f1ffa8b97b6f183c01',
        'redirect' => 'https://dientu.com:8000/callback/facebook',
    ]
];
