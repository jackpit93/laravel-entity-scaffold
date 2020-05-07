<h1 align="center">
    Enter your entity and I make anything for your entity

</h1>


<h3 align="center">
This package will help you to create a model,migration,controller,request,resource just by writing the name.

</h3>



## <g-emoji class="g-emoji" alias="arrow_down" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/2b07.png">⬇️</g-emoji> Installation 

You can install the package via composer:

```bash
composer require mohammad-najjary/laravel-entity-scaffold
```

The default paths are set in config/entity-scaffold.php. Publish the config to copy the file to your own config:

```bash
php artisan vendor:publish  --tag="entity-scaffold"
```
## <g-emoji class="g-emoji" alias="gem" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f48e.png">💎</g-emoji> How to Use?


```bash
php artisan make:entity your_entity
```
Suppose our entity is a product:

```bash
php artisan make:entity product
```
after that,it make file in this paths:

Models:
```bash
App/Models/Product/Product.php
```
Controllers:
```bash
App/Http/Controllers/ProductsController.php
```
Form Requests:
```bash
App/Requests/Product/StoreProduct.php
```
Resources:
```bash
App/Resources/Product/ProductsResource.php
App/Resources/Product/ProductsCollection.php
```
Migrations:
```bash
****_**_**_******_create_products_table
```

## <g-emoji class="g-emoji" alias="gear" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/2669.png">💎</g-emoji> change default paths
If you change default path.first see `config/entity-scaffold.php` file:
```php
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

```
And then change whatever path you want puts its key in  `.env` ‍‍‍file like this:

```dotenv
ENTITY_SCAFFOLD_CONTROLLER_PATH=Admin/Dashboard
ENTITY_SCAFFOLD_MODEL_PATH=Entity
```
## Credits

- [Mohammad](https://github.com/mohammad-najjary)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

