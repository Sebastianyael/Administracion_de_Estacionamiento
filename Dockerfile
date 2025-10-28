# Usar la imagen oficial de PHP con Apache
FROM php:8.2-apache

# Copiar todos los archivos del proyecto al directorio web de Apache
COPY . /var/www/html/

# Habilitar mod_rewrite en caso de que uses .htaccess (opcional)
RUN a2enmod rewrite

# Exponer puerto que Render asignará
EXPOSE 10000

# Comando por defecto para iniciar Apache
CMD ["apache2-foreground"]
