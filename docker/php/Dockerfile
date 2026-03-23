FROM php:8.3-fpm

RUN apt-get update \
  && apt-get install -y \
  git zip unzip curl

RUN docker-php-ext-install pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer