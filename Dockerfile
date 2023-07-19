# Use the official PHP-FPM Alpine base image for PHP 8.2
FROM php:8.2-fpm-alpine

ENV COMPOSER_ALLOW_SUPERUSER=1

# Set the working directory in the container
# WORKDIR /var/www/html

# Install system dependencies
RUN apk --update --no-cache add \
  bash \
  git \
  zip \
  unzip \
  libmcrypt-dev \
  openssl

# Install PHP extensions required by Laravel
# RUN docker-php-ext-install pdo pdo_mysql exif

RUN docker-php-ext-install \
  # bcmath \
  # ctype \
  # fileinfo \
  # json \
  # mbstring \
  pdo \
  pdo_mysql \
  # pdo_pgsql \
  # tokenizer \
  # xml \
  exif

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# Install application dependencies
# RUN composer install --no-dev --optimize-autoloader

# Set appropriate permissions for Laravel
# RUN chown -R www-data:www-data /var/www/html/storage

# Set environment variables for Laravel
ENV WEB_DOCUMENT_ROOT=/app/public

WORKDIR /app

# Copy the application files to the container
COPY . .

# ENV APP_ENV=production
# ENV APP_DEBUG=false
# ENV DB_USERNAME=sentinel
# ENV DB_PASSWORD=password

# --no-dev
RUN composer install --no-interaction --optimize-autoloader
# Optimizing Configuration loading
RUN php artisan config:cache
# Optimizing Route loading
RUN php artisan route:cache
# Optimizing View loading
# RUN php artisan view:cache

RUN php artisan key:generate

# RUN chown -R application:application .
RUN chown -R www-data:www-data /app/storage

CMD php artisan serve --host=0.0.0.0 --port=8000
EXPOSE 8000
