# Usar la imagen oficial de PHP con Apache
FROM php:8.2-apache

# Instalar mysqli y otras extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar archivos del proyecto
COPY . /var/www/html/

# Establecer directorio de trabajo
WORKDIR /var/www/html

# Habilitar mod_rewrite y definir index predeterminado
RUN a2enmod rewrite
RUN echo "DirectoryIndex index.php index.html" >> /etc/apache2/apache2.conf

# Exponer puerto (Render lo reasigna internamente)
EXPOSE 10000

# Iniciar Apache
CMD ["apache2-foreground"]



