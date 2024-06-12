FROM php:8-fpm

RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev libmagickwand-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli \
    && pecl install imagick \
    && docker-php-ext-enable mysqli imagick
