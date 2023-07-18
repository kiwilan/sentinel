# Sentinel

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
