FROM php:8.4-fpm

RUN apt-get update && apt-get install -y \
  libzip-dev unzip libxml2-dev \
  && docker-php-ext-install zip xml

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
