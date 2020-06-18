FROM php:7.2-fpm

# mysql的pdo
RUN apt-get update \
     && apt-get install -y --no-install-recommends libpq-dev \
     && docker-php-ext-install mysqli pdo_pgsql pdo_mysql

#pd图形库
RUN apt-get install -y --no-install-recommends libfreetype6-dev libjpeg62-turbo-dev libpng-dev \
	&& rm -r /var/lib/apt/lists/* \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd