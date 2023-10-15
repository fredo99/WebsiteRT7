FROM php:7.4

WORKDIR /var/www/html

# RUN docker-php-ext-install extension_name
COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80"]
