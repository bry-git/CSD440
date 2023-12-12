FROM php:8.1-apache

RUN docker-php-ext-install mysqli

# add the FPDF library
RUN apt-get update && \
    apt-get install -y git && \
    git clone https://github.com/Setasign/FPDF.git /var/www/html/fpdf && \
    rm -rf /var/lib/apt/lists/*

COPY . /var/www/html/

CMD ["apache2-foreground"]
