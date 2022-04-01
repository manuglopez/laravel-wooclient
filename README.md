# Laravel-Wooclient

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](https://manuglez.mit-license.org/)
[![Total Downloads](https://img.shields.io/packagist/dt/manuglopez/laravel-wooclient.svg)](https://packagist.org/packages/manuglopez/laravel-wooclient)
[![php-cs-fixer](https://github.com/manuglopez/laravel-wooclient/actions/workflows/php-cs-fixer.yml/badge.svg)](https://github.com/manuglopez/laravel-wooclient/actions)
[![phpstan](https://github.com/manuglopez/laravel-wooclient/actions/workflows/phpstan.yml/badge.svg)](https://github.com/manuglopez/laravel-wooclient/actions)
[![Tests](https://github.com/manuglopez/laravel-wooclient/actions/workflows/run-test.yml/badge.svg)](https://github.com/manuglopez/laravel-wooclient/actions)

This Laravel package offer a wrapper for https://github.com/woocommerce/wc-api-php



## Install

```bash
composer require manuglopez/laravel-wooclient
```


## Usage

Before using this client you will need to publish config file.

```bash
php artisan vendor:publish --provider="Manuglopez\LaravelWooclient\LaravelWooclientServiceProvider"
```

Values are expected to find in your .env file with apropiate key and credentials

After that you can use the Facade as 
```php
LaravelWooclientFacade::get('/woocommerce_endpoint', [])
```
## Testing

Run the tests with:

```bash
vendor/bin/phpunit
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## Security

If you discover any security-related issues, please email mglopez@me.com instead of using the issue tracker.


## License

The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.