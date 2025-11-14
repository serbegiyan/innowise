FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libxml2-dev \
    build-essential \
    curl \
    unzip \
    && docker-php-ext-install -j$(nproc) \
        simplexml \
        pdo \
        pdo_pgsql

RUN pecl channel-update pecl.php.net && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# ✅ Установка PHP_CodeSniffer (линтер)
RUN composer global require squizlabs/php_codesniffer

# Добавляем глобальный composer bin в PATH
ENV PATH="$PATH:/root/.composer/vendor/bin"

WORKDIR /app
