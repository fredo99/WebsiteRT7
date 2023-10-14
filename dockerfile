FROM php:latest

WORKDIR /var/www/html
RUN apt-get update \
    && apt-get install -y \
        libzip-dev \
        unzip \
        git \
    && docker-php-ext-install zip pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www/html

RUN composer install --no-scripts --no-autoloader \
    && composer dump-autoload --optimize

RUN php artisan key:generate

EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80"]
