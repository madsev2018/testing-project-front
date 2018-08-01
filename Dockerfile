################################################################################
# Base image
################################################################################

FROM joomla
# php:7.1.19-apache

############################################################################# ###
# Install composer
################################################################################

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && chmod a+x /usr/local/bin/composer

RUN a2enmod rewrite

################################################################################
# Configurations
################################################################################

COPY ./docker/php.ini /usr/local/etc/php/conf.d/
# COPY ./docker/supervisord.conf /etc/supervisor/conf.d/
COPY ./docker/vhost.conf /etc/apache2/sites-enabled/000-default.conf

################################################################################
# Application
################################################################################

COPY . /var/www/wise-ecommerce-front
WORKDIR /var/www/wise-ecommerce-front

