<?php
return [


    /*
    |--------------------------------------------------------------------------
    | Controllers Path
    |--------------------------------------------------------------------------
    |
    | Your controller path is located here App/Http/Controllers/{ENTITY_SCAFFOLD_CONTROLLER_PATH}
    | example:
    | ENTITY_SCAFFOLD_CONTROLLER_PATH='Admin/'
    | Don't forget insert "/" to end of Your path.
    */
    'controllers_path' => env('ENTITY_SCAFFOLD_CONTROLLER_PATH', '/'),


    /*
    |--------------------------------------------------------------------------
    | Models Path
    |--------------------------------------------------------------------------
    |
    | Your Models Path is located here App/{ENTITY_SCAFFOLD_MODEL_PATH}
    |
    */
    'models_path' => env('ENTITY_SCAFFOLD_MODEL_PATH', 'Models/'),


    /*
    |--------------------------------------------------------------------------
    | Resource Path
    |--------------------------------------------------------------------------
    |
    | Your Resource Path is located here App/Http/Resources/{ENTITY_SCAFFOLD_RESOURCE_PATH}
    |
    */
    'resources_path' => env('ENTITY_SCAFFOLD_RESOURCE_PATH', '/'),


    /*
    |--------------------------------------------------------------------------
    | Requests Path
    |--------------------------------------------------------------------------
    |
    | Your Requests Path is located here App/Http/Requests/{ENTITY_SCAFFOLD_REQUEST_PATH}
    |
    */
    'requests_path' => env('ENTITY_SCAFFOLD_REQUEST_PATH', '/'),


];
