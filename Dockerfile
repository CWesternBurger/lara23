FROM php:8.3-apache
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        curl \
        libpng-dev \
        libzip-dev \
        libonig-dev \
        unzip \
    && docker-php-ext-install pdo_mysql mbstring bcmath gd zip \
    && a2enmod rewrite headers \
    && rm -rf /var/lib/apt/lists/*

# Fix MPM: eliminar físicamente todos los MPM y dejar solo prefork
RUN rm -f /etc/apache2/mods-enabled/mpm_*.load \
          /etc/apache2/mods-enabled/mpm_*.conf \
    && ln -s /etc/apache2/mods-available/mpm_prefork.load /etc/apache2/mods-enabled/mpm_prefork.load \
    && ln -s /etc/apache2/mods-available/mpm_prefork.conf /etc/apache2/mods-enabled/mpm_prefork.conf

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN git config --global --add safe.directory /var/www/html
WORKDIR /var/www/html
COPY docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY docker/entrypoint.sh /usr/local/bin/entrypoint
COPY . .
RUN composer install --prefer-dist --no-interaction \
    && chmod +x /usr/local/bin/entrypoint \
    && mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views storage/logs bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache
EXPOSE 80
ENTRYPOINT ["entrypoint"]
CMD ["apache2-foreground"]