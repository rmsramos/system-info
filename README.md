# System Info Widget

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rmsramos/system-info.svg?style=flat-square)](https://packagist.org/packages/rmsramos/system-info)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](LICENSE.md)
[![Fix PHP Code Styling](https://github.com/rmsramos/system-info/actions/workflows/fix-php-code-style-issues.yml/badge.svg)](https://github.com/rmsramos/system-info/actions/workflows/fix-php-code-style-issues.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/rmsramos/system-info.svg?style=flat-square)](https://packagist.org/packages/rmsramos/system-info/stats)

![Screenshot of Application Feature](https://raw.githubusercontent.com/rmsramos/system-info/main/arts/cover.png)

A very simple filament plugin to show system info widget

## Installation

You can install the package via composer:

```bash
composer require rmsramos/system-info
```

## Usage

In your Panel Service Provider `(App\Providers\Filament)` active the plugin

Add the `Rmsramos\SystemInfo\SystemInfoPlugin` to your panel config

```php
use Rmsramos\SystemInfo\SystemInfoPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->plugins([
                SystemInfoPlugin::make()
                    ->setSort(2),
            ]);
    }
}

```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Rômulo Ramos](https://github.com/rmsramos)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
