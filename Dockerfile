FROM php:5.6-apache

# PHP extensions

COPY . /usr/src/dst_folder

WORKDIR /usr/src/dst_folder

RUN docker-php-ext-install pdo pdo_mysql