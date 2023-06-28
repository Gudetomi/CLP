FROM php:7.4.33-cli
WORKDIR /var/www/html
COPY . /var/www/html
CMD [ "php", "-S", "0.0.0.0:80" ]
