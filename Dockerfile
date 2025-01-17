# Use the official PHP image with Apache
FROM php:8.2-apache

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html/

# Expose port 80
EXPOSE 80

# Start Apache service
CMD ["apache2-foreground"]