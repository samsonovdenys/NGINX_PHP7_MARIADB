FROM php:7.4-fpm

# update and upgrade
RUN apt-get -y update
RUN apt-get -y upgrade

# mysqli dependences extensions
RUN apt-get -y install libpng-dev
RUN apt-get -y install zlib1g-dev

# PDO client for PHP
RUN docker-php-ext-install pdo_mysql
# mysqli client for PHP
RUN docker-php-ext-install mysqli

RUN docker-php-ext-install gd


WORKDIR /app

# install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"  \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer

#RUN rm /usr/local/etc/php-fpm.d/www.conf
#ADD pool.conf /usr/local/etc/php-fpm.d/
#COPY php.ini /usr/local/etc/php/conf.d
#COPY php.ini /usr/local/etc/php

#RUN adduser php-fpm
#RUN mkdir /run/php-fpm/

#=======================
# Export
#===================
EXPOSE 9000

CMD ["php-fpm", "-F"]
