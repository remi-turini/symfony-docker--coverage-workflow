FROM php:8.1-apache

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

#RUN chmod +x /usr/local/bin/install-php-extensions && \
#install-php-extensions pdo_mysql intl zip

RUN #curl -sSk https://getcomposer.org/installer | php -- --disable-tls && mv composer.phar /usr/local/bin/composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apt-get update && apt-get -y install libzip-dev libicu-dev

RUN docker-php-ext-install pdo_mysql intl zip

RUN pecl install xdebug-3.1.4 \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.mode=coverage" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN cd /usr/local/etc/php/conf.d/ && \
  echo 'memory_limit = -1' >> /usr/local/etc/php/conf.d/docker-php-ram-limit.ini

#COPY . /var/www/

#COPY ./docker/vhost/apache.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/
#RUN composer install

ENTRYPOINT ["bash", "./docker/docker.sh"]
#ENV COMPOSER_ALLOW_SUPERUSER = 1

EXPOSE 80 25

#CMD ["maildev", "--web", "80", "--smtp", "25"]