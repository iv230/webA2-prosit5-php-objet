FROM php:7.2-apache

COPY . /srv/app
COPY vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /srv/app

RUN docker-php-ext-install mbstring pdo pdo_mysql \
    && chown -R www-data:www-data /srv/app \
    && a2enmod rewrite