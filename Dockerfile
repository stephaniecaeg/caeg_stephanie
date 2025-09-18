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
EXPOSE 80