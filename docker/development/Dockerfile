FROM php:7.3-apache

ENV PATH $PATH:/var/www/html/vendor/bin

ARG USER_ID=1000
ARG GROUP_ID=1000

RUN apt-get update && apt-get install -y git curl libpq-dev unzip xsltproc zip libpng-dev libonig-dev libzip-dev libxml2-dev iputils-ping

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install -j$(nproc) gd pdo pdo_pgsql zip mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite \
    && usermod -u $USER_ID www-data \
    && groupmod -g $GROUP_ID www-data \
    && find / -path /proc -prune -user 33 -exec chgrp -h www-data {} \; \
    && find / -path /proc -prune -group 33 -exec chown -h www-data {} \;

COPY vhost.conf /etc/apache2/sites-available/000-default.conf
COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

COPY certs/sso.laravel.localtest.me.pem /var/www/cacert.pem
COPY php.ini /usr/local/etc/php/conf.d/curl.ini
