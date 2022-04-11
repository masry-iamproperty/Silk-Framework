FROM composer:latest

WORKDIR /app

COPY . ./

RUN composer install

EXPOSE 9000