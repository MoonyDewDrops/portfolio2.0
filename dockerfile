FROM php:8.2-apache

# Kopieer alle bestanden naar de Apache root
COPY . /var/www/html/

# Schakel mod_rewrite in (vereist voor .htaccess)
RUN a2enmod rewrite

# Zet Apache-config om AllowOverride toe te staan (voor .htaccess)
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf