FROM ubuntu:xenial
MAINTAINER CTAC

RUN apt-get update \
    && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
        locales software-properties-common unattended-upgrades curl git vim \
    && unattended-upgrade -d

RUN locale-gen en_US.UTF-8

ENV LANG       en_US.UTF-8
ENV LC_ALL     en_US.UTF-8
ENV LANGUAGE   en_US.UTF-8

ADD https://github.com/just-containers/s6-overlay/releases/download/v1.19.1.1/s6-overlay-amd64.tar.gz /tmp/s6/

ARG PHP_VERSION
ENV PHP_VERSION ${PHP_VERSION:-7.1}

RUN cp -R /tmp/s6/* /\
    && LC_ALL=en_US.UTF-8 add-apt-repository ppa:ondrej/php \
    && add-apt-repository ppa:nginx/stable \
    && apt-get update \
    && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
        make php${PHP_VERSION}-dev gettext-base unzip \
        mysql-client \
        php${PHP_VERSION}-cli php${PHP_VERSION}-fpm \
        php${PHP_VERSION}-bcmath \
        php${PHP_VERSION}-bz2 \
        php${PHP_VERSION}-curl \
        php${PHP_VERSION}-gd \
        php${PHP_VERSION}-intl \
        php${PHP_VERSION}-json \
        php${PHP_VERSION}-ldap \
        php${PHP_VERSION}-mbstring \
        php${PHP_VERSION}-mcrypt \
        php${PHP_VERSION}-mysql \
        php${PHP_VERSION}-opcache \
        php${PHP_VERSION}-readline \
        php${PHP_VERSION}-recode \
        php${PHP_VERSION}-xml \
        php${PHP_VERSION}-xsl \
        php${PHP_VERSION}-zip \
        php-igbinary \
        php-redis \
        # libsodium-dev \
        php-pear \
        nginx \
    && ln -s /etc/php/${PHP_VERSION} /etc/php/$(echo $PHP_VERSION | grep -o -E '[0-9]+' | head -1 | sed -e 's/^0\+//') \
    && ln -s /usr/sbin/php-fpm${PHP_VERSION} /usr/sbin/php-fpm \
    && ln -s /etc/init.d/php${PHP_VERSION}-fpm /etc/init.d/php-fpm \
    && pecl channel-update pecl.php.net \
    && pecl install -f libsodium \
        && echo "extension=sodium.so" > /etc/php/${PHP_VERSION}/mods-available/sodium.ini \
        && ln -s /etc/php/${PHP_VERSION}/mods-available/sodium.ini /etc/php/${PHP_VERSION}/cli/conf.d/20-sodium.ini \
        && ln -s /etc/php/${PHP_VERSION}/mods-available/sodium.ini /etc/php/${PHP_VERSION}/fpm/conf.d/20-sodium.ini \
    && mkdir -p /etc/nginx/certs \
    && openssl req \
        -new -newkey rsa:2048 \
        -days 365 -nodes -x509 \
        -subj "/C=US/ST=Virginia/L=Falls Church/O=CTAC/CN=localhost" \
        -keyout /etc/nginx/certs/site.key \
        -out    /etc/nginx/certs/site.cert \
    && apt-get -y autoclean \
        && apt-get -y clean \
        && apt-get -y autoremove \
        && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*


RUN mkdir -p -m 664 \
            /var/lib/php/sessions \
            /var/log/app/nginx \
            /var/log/app/php \
        && chown -R www-data:www-data \
            /var/lib/php/sessions \
            /var/log/app \
            /var/www \
        && ln -sf /dev/stdout /var/log/app/nginx/access.log \
        && ln -sf /dev/stderr /var/log/app/nginx/error.log \
        && ln -sf /dev/stderr /var/log/app/php/cli_error.log \
        && ln -sf /dev/stderr /var/log/app/php/fpm_error.log \
        && ln -sf /dev/stderr /var/log/app/php/fpm_slow.log \
        && ln -sf /dev/stderr /var/log/php-fpm.log \

COPY rootfs /

ARG DRUPAL_VERSION
ENV DRUPAL_VERSION ${DRUPAL_VERSION:-8}

RUN cd /usr/src \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && chmod a+x /usr/local/bin/composer \
    && composer global require drush/drush:~8.1 \
    && composer global update --no-plugins --no-scripts \
    && ln -s /root/.composer/vendor/bin/drush /usr/local/bin/drush \
    && chmod a+x /usr/local/bin/drush /root/.composer/vendor/bin/drush \
    && curl https://drupalconsole.com/installer -L -o drupal.phar \
    && mv drupal.phar /usr/local/bin/drupal \
    && chmod +x /usr/local/bin/drupal

RUN cd /var/www \
    && composer create-project drupal-composer/drupal-project:8.x-dev \
       drupal \
       --stability dev \
       --no-interaction \
    && chown -R www-data:www-data /var/www/drupal \
    && ln -s /etc/php/${PHP_VERSION} /etc/php/curr

WORKDIR /var/www/drupal
EXPOSE 80 443

ENTRYPOINT [ "/init" ]
