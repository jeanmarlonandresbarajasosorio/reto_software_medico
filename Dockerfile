FROM php:5.6-apache

# Cambiar los repositorios obsoletos de Debian Stretch al archivo histórico
RUN sed -i 's/deb.debian.org/archive.debian.org/g' /etc/apt/sources.list && \
    sed -i 's/security.debian.org/archive.debian.org/g' /etc/apt/sources.list && \
    sed -i '/stretch-updates/d' /etc/apt/sources.list

# Instalar dependencias del sistema y extensiones de PHP
RUN apt-get update && apt-get install -y --force-yes \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    mysql-client \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd mysql mysqli pdo pdo_mysql

# Habilitar el módulo de reescritura
RUN a2enmod rewrite

# Configuración explícita para el VirtualHost (CORRECCIÓN CLAVE)
# En lugar de usar 'sed', creamos un archivo de configuración directo
RUN echo '<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/web\n\
    <Directory /var/www/html/web>\n\
        Options Indexes FollowSymLinks\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

EXPOSE 80