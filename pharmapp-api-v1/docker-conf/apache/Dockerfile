FROM php:8.0-apache

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update -qq && \
    apt-get install -qy \
    git \
    gnupg \
    unzip \
    libzip-dev \
    zip \
    wget \
    libicu-dev

# Install apfd // Without it, Put requests do not work with form-data
RUN pecl install apfd \
    && docker-php-ext-enable apfd

RUN docker-php-ext-configure intl
RUN docker-php-ext-install -j$(nproc) opcache pdo_mysql zip intl

ENV PHP_MEMORY_LIMIT 2G
ENV PHP_PORT 9000
ENV PHP_PM dynamic
ENV PHP_PM_MAX_CHILDREN 10
ENV PHP_PM_START_SERVERS 4
ENV PHP_PM_MIN_SPARE_SERVERS 2
ENV PHP_PM_MAX_SPARE_SERVERS 6
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
ENV APACHE_RUN_USER=#1000
ENV APACHE_RUN_GROUP=#33

COPY ./*.ini $PHP_INI_DIR/conf.d/

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html

COPY ./000-default.conf /etc/apache2/sites-enabled/000-default.conf
