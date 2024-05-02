FROM php:7.4.12-apache

RUN bash -c "docker-php-ext-install mysqli"

RUN service apache2 restart;