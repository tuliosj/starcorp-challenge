FROM php:7.4-cli
COPY . /usr/src/tuliosj-starcorp
WORKDIR /usr/src/tuliosj-starcorp
CMD [ "php", "./index.php" ]

FROM php:7.2-apache
COPY . /var/www/html/

COPY --from=composer /usr/bin/composer /usr/bin/composer
