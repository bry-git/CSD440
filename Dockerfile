FROM php:8.1-apache
COPY mod2/ /var/www/html/mod2
COPY mod3/ /var/www/html/mod3
COPY mod4/ /var/www/html/mod4
COPY index.php /var/www/html/index.php
CMD ["apache2-foreground"]