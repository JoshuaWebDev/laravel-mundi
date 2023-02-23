FROM php:7.4-apache

RUN apt-get update && apt-get -y install git curl vim zip unzip build-essential gcc g++ python-dev
RUN curl -sSLf \
        -o /usr/local/bin/install-php-extensions \
        https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions
RUN chmod +x /usr/local/bin/install-php-extensions
RUN install-php-extensions zip @composer-2.0.2

COPY . /var/www/html

WORKDIR /var/www/html