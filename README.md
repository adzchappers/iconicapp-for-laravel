# IconicApp for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/adzchappers/iconicapp-for-laravel.svg?style=flat-square)](https://packagist.org/packages/adzchappers/iconicapp-for-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/adzchappers/iconicapp-for-laravel/run-tests?label=tests)](https://github.com/adzchappers/iconicapp-for-laravel/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/adzchappers/iconicapp-for-laravel/Check%20&%20fix%20styling?label=code%20style)](https://github.com/adzchappers/iconicapp-for-laravel/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/adzchappers/iconicapp-for-laravel.svg?style=flat-square)](https://packagist.org/packages/adzchappers/iconicapp-for-laravel)


A Laravel package for easy use of the wonderful [iconic.app](https://iconic.app) icon set in blade, svg, or png.

## Requirements

- PHP 7.4 or higher
- Laravel 7.0 or higher

## Installation

You can install the package via composer, this will give you access to the blade components:

```bash
composer require adzchappers/iconicapp-for-laravel
```

If you want to use the SVG or PNG files directly, you'll need to publis them directly.

All Files
```bash
php artisan vendor:publish --provider="AdzChappers\IconicappForLaravel\ServiceProvider" --force
```

SVG Files
```bash
php artisan vendor:publish --provider="AdzChappers\IconicappForLaravel\ServiceProvider" --tag=iconic-svg --force
```

All PNG Files
```bash
php artisan vendor:publish --provider="AdzChappers\IconicappForLaravel\ServiceProvider" --tag=iconic-png --force
```

Black PNG Files
```bash
php artisan vendor:publish --provider="AdzChappers\IconicappForLaravel\ServiceProvider" --tag=iconic-png-black --force
```

White PNG Files
```bash
php artisan vendor:publish --provider="AdzChappers\IconicappForLaravel\ServiceProvider" --tag=iconic-png-white --force
```

## Updating

General steps for every update:

- Run `php artisan view:clear`
- If you published the raw icons run one of the above installations commands, eg `php artisan vendor:publish --provider="AdzChappers\IconicappForLaravel\ServiceProvider" --force`

## Usage

Iconic icons can be used with a self-closing Blade component, which will be compiled to an SVG:

```blade
<x-iconic-announcement />
```

You can also pass a class, style, or stroke color (any or all) into the component:

```blade
<x-iconic-announcement class="w-6 h-6" style="margin-bottom: 10px" stroke="#555"/>
```

The icons can also be used in their raw format (svg, or png)

```blade
<img src="{{ asset('vendor/iconic/svg/announcement.svg') }}" width="24" height="24"/>

<img src="{{ asset('vendor/iconic/png/white/announcement.png') }}" width="24" height="24"/>
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

- [AdzChappers](https://github.com/adzchappers)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
