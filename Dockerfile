FROM composer:latest

WORKDIR /app

COPY composer.json .

RUN composer install