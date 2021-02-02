# unit-conversion

[![Latest Version on Packagist](https://img.shields.io/packagist/v/davidstrada/unit-conversion.svg?style=flat-square)](https://packagist.org/packages/davidstrada/unit-conversion)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/davidstrada/unit-conversion/Tests?label=tests)](https://github.com/davidstrada/unit-conversion/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/davidstrada/unit-conversion.svg?style=flat-square)](https://packagist.org/packages/davidstrada/unit-conversion)


Unit conversion package.


## Installation

You can install the package via composer:

```bash
composer require davidstrada/unit-conversion
```

## Usage

```php
$lbs = Weight::fromKilograms(100)->toLbs();
$this->assertEquals(220.4623, $lbs);
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

- [David](https://github.com/davidstrada)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
