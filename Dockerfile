FROM node:22.16.0-bullseye as build

WORKDIR /builder
COPY . .
RUN npm install && npm run build

FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libzip-dev zip libpng-dev \
    && docker-php-ext-install pdo_mysql zip gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
 && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html

COPY . .

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

COPY entrypoint.sh /entrypoint.sh

RUN chmod +x /entrypoint.sh

COPY --from=build /builder/public/build ./public/build

EXPOSE 80
ENTRYPOINT ["/entrypoint.sh"]