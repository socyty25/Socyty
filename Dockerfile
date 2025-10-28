FROM php:8.2-fpm

# Install system dependencies including Oniguruma for mbstring
RUN apt-get update && apt-get install -y \
    zip unzip git curl libzip-dev libonig-dev \
    && docker-php-ext-install pdo_mysql mbstring zip

# Copy Composer binary into container
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
