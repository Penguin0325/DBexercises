FROM php:7.2-apache
RUN apt-get update  \
  && docker-php-ext-install pdo_mysql mysqli mbstring

# RUN docker-php-ext-install mbstring openssl
WORKDIR /var/www/html

EXPOSE 80
