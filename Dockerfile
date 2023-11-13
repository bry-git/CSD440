FROM php:8.1-apache
COPY src /var/www/html/
CMD ["apache2-foreground"]