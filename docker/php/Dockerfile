FROM php:8.2-fpm
RUN apt-get update && apt-get install -y libpq-dev
RUN docker-php-ext-install -j$(nproc) pdo pdo_pgsql
RUN pecl channel-update pecl.php.net && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug
WORKDIR /app
