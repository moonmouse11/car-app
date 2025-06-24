FROM phpdockerio/php:8.4-fpm
WORKDIR "/docker"

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
        php8.4-pgsql \
        php8.4-redis \
        php8.4-xdebug \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
