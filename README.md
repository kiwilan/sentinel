# Sentinel

## About

Sentinel offers a simple way to manage your applications errors, allowing you to easily track and fix them. It is built on top of the [Laravel](https://laravel.com) framework. The goal of this project is to provide a simple and easy to use error tracking application, that can be self-hosted.

Some others alternatives are the excellent [Flare](https://flareapp.io/) or [Sentry](https://sentry.io/), but they are not self-hosted and are not free. Sentinel is not a replacement for them, but a simple alternative with less features.

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
