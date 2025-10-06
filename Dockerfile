<<<<<<< HEAD
FROM php:8.2-apache

# Install PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Allow .htaccess overrides
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Copy app files
COPY . /var/www/html/

# Fix permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

=======
FROM php:8.0-apache

# Update packages and install pdo_mysql extension
RUN apt-get update && docker-php-ext-install pdo pdo_mysql

# Enable Apache rewrite module (for clean URLs, if needed)
RUN a2enmod rewrite

# Copy project files to container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Expose port 80 for web traffic
>>>>>>> f72712ed06d5ddc949ff389dcb9a453e2a1a5c0b
EXPOSE 80