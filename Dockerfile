FROM php:7.1-apache
COPY MYSITE /var/www/html/
RUN docker-php-ext-install mysqli pdo pdo_mysql
EXPOSE 80
