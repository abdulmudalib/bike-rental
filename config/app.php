<?php

  return [

    'app' => [

       /*
        |--------------------------------------------------------------------------
        | Application name
        |--------------------------------------------------------------------------
        |
        | Give the Application a name
        |
        */

        'app_name' => $_ENV['APP_NAME'] ?? 'Xcholars',
         
        "DAILY_TRIALCODE" =>  $_ENV['DAILY_TRIALCODE'] ?? '',
        "PURCHASE_CODE" =>  $_ENV['PURCHASE_CODE'] ?? '',

       /*
        |--------------------------------------------------------------------------
        | Application base path
        |--------------------------------------------------------------------------
        |
        | Specify the Application base path. Used for loading Application
        | configuration/settings and including files
        |
        */

        'base_path' => $_ENV['APP_URL'] ?? 'https://scholars.best',

       /*
        |--------------------------------------------------------------------------
        | Application Service Providers
        |--------------------------------------------------------------------------
        |
        | The service providers listed here will be automatically loaded on the
        | request to the application.
        |
        */
        'providers' => [
            App\Providers\AppServiceProvider::class,
		        App\Providers\RouteServiceProvider::class,
            App\Providers\EventServiceProvider::class,
            App\Providers\MiddlewareServiceProvider::class,
            App\Providers\ValidationServiceProvider::class,
            App\Providers\AuthServiceProvider::class,

            Xcholars\Http\HttpServiceProvider::class,
            Xcholars\Pipeline\PipelineSeviceProvider::class,
            Xcholars\Database\DatabaseServiceProvider::class,
            Xcholars\Mail\MailServiceProvider::class,
       ],

    ],
  ];
