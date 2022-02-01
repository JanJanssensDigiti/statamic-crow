<!-- # A tool to make email templates in Statamic v3

[![Latest Version on Packagist](https://img.shields.io/packagist/v/digiti/statamic-crow.svg?style=flat-square)](https://packagist.org/packages/digiti/statamic-crow)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/digiti/statamic-crow/run-tests?label=tests)](https://github.com/digiti/statamic-crow/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/digiti/statamic-crow/Check%20&%20fix%20styling?label=code%20style)](https://github.com/digiti/statamic-crow/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/digiti/statamic-crow.svg?style=flat-square)](https://packagist.org/packages/digiti/statamic-crow)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example. -->

## Installation

You can install the package via composer:

```bash
composer require digiti/statamic-crow
```

Publish all assets with the command below

```bash
php artisan crow-install
```

You can optionally clear the cache to make sure all assets are loaded in.

```bash
php artisan optimize:clear
```

## Updating

If you are updating a current instance you can just run the install command to overwrite everything or run the update command to overwrite everything except your theming config.
```bash
php artisan crow-update
```

If you only want to update certain parts you can use one of the below commands to update the corresponding part.
```bash
php artisan vendor:publish --tag=crow-config
php artisan vendor:publish --tag=crow-layouts
php artisan vendor:publish --tag=crow-partials
php artisan vendor:publish --tag=crow-fieldsets
php artisan vendor:publish --tag=crow-blueprints
```

## Usage
<!-- You can start making email templates in the collection "Email templates". Configure theming in the config/crow.php file. When you are done navigate to the corresponding template link and there you can copy the template to your clipboard to do whatever you want to do with it. -->


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jan Janssens](https://github.com/digiti)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
