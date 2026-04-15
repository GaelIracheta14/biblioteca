FROM php:8.0-fpm
# Install system dependencies
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd

    #install composer
    COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

    #create a directory for the application
    WORKDIR /var/www

    #copiar proyecto
    COPY . .

    #install dependencies
    RUN composer install --no-dev --optimize-autoloader

    #permissions
    RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

    #copiar config de nginx
    COPY docker/nginx.conf /etc/nginx/sites-available/default

    #script arranque
    COPY docker/entrypoint.sh /entrypoint.sh
    RUN chmod +x /entrypoint.sh

    EXPOSE 10000

    CMD ["/entrypoint.sh"]

