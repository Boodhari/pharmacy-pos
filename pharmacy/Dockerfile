# Use official PHP with Apache
FROM php:8.1-apache

# Enable Apache rewrite module (optional)
RUN a2enmod rewrite

# Copy all project files to the Apache web root
COPY . /var/www/html/

# Set permissions (optional)
RUN chown -R www-data:www-data /var/www/html
