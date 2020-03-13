FROM php:7.2-apache

MAINTAINER Indy Vijayakumar<indy@2hatslogic.com>

ENV APP_ROOT /app
ENV DOCKER_PATH .docker

RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR $APP_ROOT

RUN chown -R www-data:www-data . && a2enmod rewrite

RUN service apache2 restart

COPY $DOCKER_PATH/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY . /app

RUN composer install

EXPOSE 80

# Clean up APT when done
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
