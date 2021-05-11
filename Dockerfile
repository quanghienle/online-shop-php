FROM php:7.2-apache

COPY . /var/www/html/

EXPOSE 80

RUN a2enmod headers

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN chmod -R 777 /var/www/html/var

RUN a2enmod rewrite
