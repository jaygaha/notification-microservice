FROM php:7.4-fpm-alpine

WORKDIR /var/www/html/

RUN docker-php-ext-install pdo_mysql

RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

COPY . .

RUN composer install