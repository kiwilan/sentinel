# Sentinel

[![php][php-version-src]][php-version-href]
[![laravel][laravel-src]][laravel-href]
[![version][version-src]][version-href]
[![license][license-src]][license-href]
[![tests][tests-src]][tests-href]
[![codecov][codecov-src]][codecov-href]
[![netlify][netlify-src]][netlify-href]

## About

Sentinel offers a simple way to track your applications errors, allowing you to easily track and fix them. It is built on top of the [Laravel](https://laravel.com) framework. The goal of this project is to provide a simple and easy to use error tracking application, that can be self-hosted.

Some others alternatives are the excellent [Flare](https://flareapp.io/) or [Sentry](https://sentry.io/), but they are not self-hosted and are not free. Sentinel is not a replacement for them, but a simple alternative with less features.

## Features

-   [x] Host your instance
-   [x] Error tracking

## Installation

Install dependencies.

```bash
composer install
```

Create `.env` file.

```bash
cp .env.example .env
```

Generate application key.

```bash
php artisan key:generate
```

Run migrations.

```bash
php artisan migrate --seed
```

## Usage

Start the development server.

```bash
php artisan serve
```

## Testing

Run tests.

```bash
php artisan test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[<img src="https://user-images.githubusercontent.com/48261459/201463225-0a5a084e-df15-4b11-b1d2-40fafd3555cf.svg" height="120rem" width="100%" />](https://github.com/kiwilan)

[version-src]: https://img.shields.io/badge/dynamic/json?label=version&query=version&url=https://raw.githubusercontent.com/kiwilan/sentinel/main/composer.json&style=flat-square&color=777BB4&labelColor=18181b
[version-href]: https://packagist.org/packages/kiwilan/sentinel
[php-version-src]: https://img.shields.io/static/v1?style=flat-square&label=PHP&message=v8.1&color=777BB4&logo=php&logoColor=ffffff&labelColor=18181b
[php-version-href]: https://www.php.net/
[license-src]: https://img.shields.io/github/license/kiwilan/sentinel.svg?style=flat-square&colorA=18181B&colorB=777BB4
[license-href]: https://github.com/kiwilan/sentinel/blob/main/README.md
[tests-src]: https://img.shields.io/github/actions/workflow/status/kiwilan/sentinel/run-tests.yml?branch=main&label=tests&style=flat-square&colorA=18181B
[tests-href]: https://github.com/kiwilan/sentinel/actions/workflows/run-tests.yml
[codecov-src]: https://codecov.io/gh/kiwilan/sentinel/branch/main/graph/badge.svg?token=P9XIK2KV9G
[codecov-href]: https://codecov.io/gh/kiwilan/sentinel
[laravel-src]: https://img.shields.io/static/v1?label=Laravel&message=v10&style=flat-square&colorA=18181B&colorB=FF2D20
[laravel-href]: https://laravel.com
[netlify-src]: https://api.netlify.com/api/v1/badges/849d4a45-1236-4f9e-992c-4a242588aeac/deploy-status
[netlify-href]: https://app.netlify.com/sites/sentinel/deploys
