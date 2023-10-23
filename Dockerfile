FROM php:8.1-apache AS php-base

# Set Apache document root
ENV APACHE_DOCUMENT_ROOT /var/www/html/l10/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Dependencies
RUN apt-get update -y && apt-get install -y vim ssh libpng-dev libmagickwand-dev libjpeg-dev \
  libmemcached-dev zlib1g-dev libzip-dev git unzip subversion ca-certificates libicu-dev libxml2-dev \
  libmcrypt-dev openssl \
  && apt-get autoremove -y && apt-get clean && rm -rf /var/lib/apt/lists/

# PHP Extensions - PECL
# RUN pecl install imagick memcached mcrypt-1.0.6 && docker-php-ext-enable imagick memcached mcrypt
RUN pecl install imagick mcrypt-1.0.6 && docker-php-ext-enable imagick mcrypt

# PHP Extensions - docker-php-ext-install
RUN docker-php-ext-install zip gd mysqli exif pdo pdo_mysql opcache intl soap

# PHP Extensions - docker-php-ext-configure
RUN docker-php-ext-configure intl

# PHP Tools
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && php composer-setup.php --install-dir=/usr/local/bin --filename=composer

# Config
RUN a2enmod rewrite && a2enmod ssl && a2enmod socache_shmcb

RUN openssl req -new -newkey rsa:2048 -days 365 -nodes -x509 \
  -subj "/C=US/ST=CA/L=San Francisco/O=Localhost/OU=Localhost/CN=localhost" \
  -keyout /etc/ssl/private/ssl-cert-snakeoil.key -out /etc/ssl/certs/ssl-cert-snakeoil.pem

# http://blog.oddbit.com/post/2019-02-24-docker-build-learns-about-secr/
# This is necessary to prevent the "git clone" operation from failing
# with an "unknown host key" error.
RUN mkdir -m 700 /root/.ssh; \
  touch -m 600 /root/.ssh/known_hosts; \
  ssh-keyscan github.com > /root/.ssh/known_hosts

# Override default config with custom PHP settings
COPY docker-config/* $PHP_INI_DIR/conf.d/

# Override default Apache virtual host configuration with HTTPS
COPY apache-config/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf
RUN a2ensite default-ssl

FROM php-base AS php

# Copy files
COPY / /var/www/

# Install Composer dependencies

RUN cd /var/www && composer install --no-dev && composer clear-cache
RUN chown 1000:1000 -R /var/www/html
RUN chmod 777 -R /var/www/html/l10

EXPOSE 80
EXPOSE 443
