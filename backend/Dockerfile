FROM composer AS composer

COPY . /app

RUN set -xe \
 && composer install


FROM php:7.3-fpm

RUN apt-get update --fix-missing \
    && apt-get install -y apt-utils \
    && apt-get install -y libcurl4-gnutls-dev \
    && apt-get install -y libxml2-dev \
    && apt-get install -y freetds-dev \
    && apt-get install -y git \
    && apt-get install -y curl \
    && apt-get install -y supervisor \
    && apt-get install -y libpq-dev \
    && apt-get install -y zip \
    && docker-php-ext-install calendar \
    && docker-php-ext-install pdo mysqli pdo_mysql

WORKDIR /app

COPY . /app

COPY ./docker/php-fpm/docker-entrypoint.sh /usr/local/bin/
ENTRYPOINT ["docker-entrypoint.sh"]

COPY --from=composer /app/vendor /app/vendor

RUN chmod 777 /usr/local/bin/docker-entrypoint.sh \
    && ln -s /usr/local/bin/docker-entrypoint.sh /

RUN chmod 777 -R storage/

RUN chmod 777 -R bootstrap/cache/
