FROM php:7.4-apache

RUN a2enmod rewrite
RUN docker-php-ext-configure mysqli && docker-php-ext-install mysqli

COPY . /var/www/html/