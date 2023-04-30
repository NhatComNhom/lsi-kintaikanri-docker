FROM php:7.4-apache

WORKDIR /var/www/html

COPY src/ /var/www/html/

RUN apt-get update && apt-get install -y libpq-dev \
&& docker-php-ext-install pdo pdo_pgsql pgsql mysqli

ADD ./php/php.ini /usr/local/etc/php/php.ini
