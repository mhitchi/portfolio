FROM php:7.4-apache

RUN docker-php-ext-install mysqli

RUN pecl install xdebug

ADD ./php.ini /usr/local/etc/php