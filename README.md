# Easily retrieve your dotenv configurations

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lostlink/laravel-dotenv.svg?style=flat-square)](https://packagist.org/packages/lostlink/laravel-dotenv)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lostlink/laravel-dotenv/run-tests?label=tests)](https://github.com/lostlink/laravel-dotenv/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lostlink/laravel-dotenv/Check%20&%20fix%20styling?label=code%20style)](https://github.com/lostlink/laravel-dotenv/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lostlink/laravel-dotenv.svg?style=flat-square)](https://packagist.org/packages/lostlink/laravel-dotenv)

This package makes it simple to interact with dotEnv management system to easily retrieve your environment configs for any project, target system and environment. 

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-dotenv.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-dotenv)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require lostlink/laravel-dotenv
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-dotenv-config"
```

This is the contents of the published config file:

```php
return [
    'url' => env('DOTENV_URL', 'https://dotenv.ca'),
    'token' => env('DOTENV_TOKEN'),
];
```

## Usage

```php
php artisan dotenv:pull -p={projectName} -t={targetSystem} -e={environmentName}
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Nuno Souto](https://github.com/nsouto)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
