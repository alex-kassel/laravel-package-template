# Laravel Package Template

A template Laravel package that demonstrates all possible "loads", "merges", and "publishes" provided by Laravel.

## Installation

Require the package via Composer:

```bash
composer require alex-kassel/laravel-package-template
```

Publish assets, config, and other resources:

```bash
php artisan vendor:publish --provider="AlexKassel\PackageTemplate\Providers\PackageTemplateServiceProvider"
```

## Usage

- Visit `/package-template` to see the example view.
- Run the example command:

```bash
php artisan package-template:example
```