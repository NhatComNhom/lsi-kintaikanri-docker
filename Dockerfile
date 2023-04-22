FROM php:8.2.0-apache

WORKDIR /var/www/html

COPY src/ /var/www/html/

RUN apt-get update \
    && docker-php-ext-install mysqli

ADD ./php/php.ini /usr/local/etc/php/php.ini