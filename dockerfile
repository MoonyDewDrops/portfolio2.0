FROM php:8.2-apache

# Schakel mod_rewrite in
RUN a2enmod rewrite

# Laat .htaccess werken (AllowOverride All)
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# (optioneel) stel expliciete DirectoryIndex in
RUN echo "DirectoryIndex index.php" > /etc/apache2/conf-available/directoryindex.conf \
  && a2enconf directoryindex

# Kopieer alle bestanden naar de server
COPY . /var/www/html/