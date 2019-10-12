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
        'client_id' => '622122697363-b4dpst5tb3huoebqk7ln6o2rg7d83ra1.apps.googleusercontent.com',
        'client_secret' => 'gtwClGKzUEESbYk2bzpD259j',
        'redirect' => 'http://127.0.0.1:8000/callback/google',
    ], 

    'facebook' => [
        'client_id' => '954105978307235',
        'client_secret' => '22bbf8c7d849d516d631e518ccd043a3',
        'redirect' => 'https://127.0.0.1:8000/callback/facebook',
      ], 
];
