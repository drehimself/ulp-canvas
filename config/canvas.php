<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Base Route
    |--------------------------------------------------------------------------
    |
    | This is the URI path where Canvas will be accessible from. You are free
    | to change this path to anything you like. Note that the URI will not
    | affect the paths of its internal API that aren't exposed to users.
    |
    */

    'path' => env('CANVAS_PATH_NAME', 'canvas'),

    /*
    |--------------------------------------------------------------------------
    | Route Middleware
    |--------------------------------------------------------------------------
    |
    | These middleware will be attached to every route in Canvas, giving you
    | the chance to add your own middleware to this list or change any of
    | the existing middleware. Or, you can simply stick with the list.
    |
    */

    'middleware' => [
        'web',
        'auth',
    ],

    /*
    |--------------------------------------------------------------------------
    | Storage
    |--------------------------------------------------------------------------
    |
    | This is the storage disk Canvas will use to put file uploads, you may
    | use any of the disks defined in the config/filesystems.php file and
    | you may also configure the path where files are to be stored.
    |
    */

    'storage_disk' => env('CANVAS_STORAGE_DISK', 'local'),

    'storage_path' => env('CANVAS_STORAGE_PATH', 'public/canvas'),

    /*
    |--------------------------------------------------------------------------
    | Unsplash Integration
    |--------------------------------------------------------------------------
    |
    | Visit https://unsplash.com/oauth/applications to create a new Unsplash
    | app. Use the confidential Access Key given to you to integrate with
    | the API. Note that demo apps are limited to 50 requests per hour.
    |
    */

    'unsplash' => [
        'access_key' => env('CANVAS_UNSPLASH_ACCESS_KEY'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Weekly Digest
    |--------------------------------------------------------------------------
    |
    | This option enables Canvas to send e-mail notifications via the default
    | mail driver on a weekly basis. All users that have published content
    | will receive a total view count summary of the last seven days.
    |
    */

    'digest' => [
        'enabled' => env('CANVAS_DIGEST_ENABLED', false),
    ],

];
