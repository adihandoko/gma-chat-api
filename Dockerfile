FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libzip-dev

RUN docker-php-ext-install zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN cp .env.example .env || true

RUN php artisan key:generate --force || true

EXPOSE 10000

CMD sh -c "\
mkdir -p database && \
[ -f database/database.sqlite ] || touch database/database.sqlite && \
php artisan migrate --force && \
php artisan serve --host=0.0.0.0 --port=$PORT"

CMD php artisan serve --host=0.0.0.0 --port=$PORT