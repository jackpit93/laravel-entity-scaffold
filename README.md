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


## Credits

- [Mohammad](https://github.com/mohammad-najjary)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

