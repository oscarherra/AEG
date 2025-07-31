FROM php:8.2-apache

# Instala dependencias necesarias
RUN apt-get update && apt-get install -y \
    libzip-dev unzip git curl libpng-dev libonig-dev libxml2-dev zip \
    && docker-php-ext-install pdo pdo_mysql zip gd mbstring

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia el código de Laravel
COPY . /var/www/html

# Establece permisos
WORKDIR /var/www/html
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Expone el puerto estándar
EXPOSE 80

# Inicia Laravel usando servidor embebido de PHP
CMD ["php", "-S", "0.0.0.0:80", "-t", "public"]
