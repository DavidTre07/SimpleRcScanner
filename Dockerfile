#FROM php:apache
FROM php:7.4-apache-buster

RUN curl -sSL https://packages.sury.org/php/README.txt | bash -x
RUN apt install libpng-dev zlib1g-dev -y \
    && docker-php-ext-install gd
COPY htdocs /var/www/html/
RUN mkdir /var/www/html/i \
 && chown -R 33:33 /var/www/html
