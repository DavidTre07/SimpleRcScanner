#FROM php:apache
FROM php:7.4-apache-buster

RUN curl -sSL https://packages.sury.org/php/README.txt | bash -x
RUN apt install libpng-dev zlib1g-dev -y \
    && docker-php-ext-install gd
