FROM php:8.2-apache

# Copiar manualmente index.php primero
COPY index.php /var/www/html/index.php

# Copiar los demás archivos (imágenes, estilos, etc.)
COPY assets /var/www/html/assets
COPY styles /var/www/html/styles

WORKDIR /var/www/html

RUN a2enmod rewrite
RUN echo "DirectoryIndex index.php index.html" >> /etc/apache2/apache2.conf

EXPOSE 10000
CMD ["apache2-foreground"]

