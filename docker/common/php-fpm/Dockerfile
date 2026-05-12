FROM php:8.2-fpm AS base

RUN apt-get update && apt-get install -y --no-install-recommends \
    git curl zip unzip \
    libpq-dev libzip-dev libpng-dev libonig-dev libxml2-dev \
    libssl-dev libcurl4-openssl-dev libicu-dev \
    && docker-php-ext-install -j$(nproc) \
    pdo_mysql pdo_pgsql pgsql mbstring intl bcmath gd zip sockets pcntl exif opcache \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY docker/common/php-fpm/conf.d/20-status-path.conf /usr/local/etc/php-fpm.d/zz-status.conf
COPY docker/common/php-fpm/conf.d/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

WORKDIR /var/www

FROM base AS development

ARG UID=1000
ARG GID=1000
ARG XDEBUG_ENABLED=false
ARG XDEBUG_MODE=develop,debug
ARG XDEBUG_HOST=host.docker.internal
ARG XDEBUG_IDE_KEY=DOCKER
ARG XDEBUG_LOG=/dev/stdout
ARG XDEBUG_LOG_LEVEL=0

USER root

RUN if [ "${XDEBUG_ENABLED}" = "true" ]; then \
    pecl install xdebug && \
    docker-php-ext-enable xdebug && \
    echo "xdebug.mode=${XDEBUG_MODE}" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    echo "xdebug.idekey=${XDEBUG_IDE_KEY}" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    echo "xdebug.log=${XDEBUG_LOG}" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    echo "xdebug.log_level=${XDEBUG_LOG_LEVEL}" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    echo "xdebug.client_host=${XDEBUG_HOST}" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini ; \
fi

RUN if getent group ${GID}; then \
      group_name=$(getent group ${GID} | cut -d: -f1); \
    else \
      groupadd -g ${GID} www && group_name=www; \
    fi && \
    if id -u www >/dev/null 2>&1; then \
      usermod -u ${UID} -g ${GID} www; \
    else \
      useradd -m -u ${UID} -g ${GID} -s /bin/bash www; \
    fi && \
    sed -i "s/user = www-data/user = www/g" /usr/local/etc/php-fpm.d/www.conf && \
    sed -i "s/group = www-data/group = ${group_name}/g" /usr/local/etc/php-fpm.d/www.conf

COPY backend/composer.json backend/composer.lock ./

RUN composer install --no-scripts --no-autoloader --no-interaction --prefer-dist

COPY backend /var/www

RUN mkdir -p storage/app/public bootstrap/cache \
    && chown -R www:www storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

RUN composer dump-autoload --optimize

COPY docker/development/php-fpm/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

USER www

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

EXPOSE 9000

CMD ["php-fpm"]