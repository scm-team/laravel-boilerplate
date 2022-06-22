FROM php:8.1-fpm

# PHP config
COPY ./.docker/php/php.ini /usr/local/etc/php/conf.d/php.ini
# install composer
COPY --from=composer:2.1.3 /usr/bin/composer /usr/bin/composer

RUN apt-get update \
    && apt-get install -y \
    git \
    zip \
    libwebp-dev \
    libzip-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    jpegoptim \
    optipng \
    pngquant \
    gifsicle \
    unzip \
    vim \
    nano \
    # install nodejs and npm
    && curl -sL https://deb.nodesource.com/setup_15.x | bash - \
    && apt-get install -y nodejs \
    # install yarn
    && apt-get install -y yarn \
    && apt-get install -y libpq-dev \
    && apt-get -y autoremove \
    # Clear cache
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql pdo_pgsql fileinfo zip
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp
RUN docker-php-ext-install gd
RUN docker-php-ext-install pcntl
WORKDIR /var/www/html