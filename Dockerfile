FROM php:8.2.0-apache

WORKDIR /var/www/html

COPY src/ /var/www/html/

# RUN apt-get update \
#     && docker-php-ext-install mysqli

RUN apt-get update && apt-get -y install libpq-dev
RUN docker-php-ext-install pdo_pgsql

ADD ./php.ini /usr/local/etc/php/php.ini