# Use the official PHP image as the base image
FROM php:8.1-apache

# Copy the application code to the web server's root directory
COPY . /var/www/html/

# Set permissions for the application
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
