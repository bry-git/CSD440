FROM php:8.1-apache
COPY mod2/ /var/www/html/mod2
COPY index.php /var/www/html/index.php
CMD ["apache2-foreground"]