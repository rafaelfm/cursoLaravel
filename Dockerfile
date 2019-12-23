FROM php:5.6-apache-jessie

COPY . /usr/src/myapp
WORKDIR /usr/src/myapp

RUN apt-get update \
    # gd
    && apt-get install -y --no-install-recommends libfreetype6-dev libjpeg-dev libpng-dev libwebp-dev  \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/inclue/ --with-webp-dir=/usr/include/ \
    && docker-php-ext-install gd \
    # pdo_mysql
    && docker-php-ext-install pdo_mysql \
    # zip
    && docker-php-ext-install zip


# composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('sha384', 'composer-setup.php') === 'baf1608c33254d00611ac1705c1d9958c817a1a33bce370c0595974b342601bd80b92a3f46067da89e3b06bff421f182') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

RUN apt-get install -y \
		openssl \
		git \
        gnupg2
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install tokenizer

# xml
RUN apt-get update \
	&& apt-get install -y \
	libxml2-dev \
	libxslt-dev \
	&& docker-php-ext-install -j$(nproc) \
		dom \
		xmlrpc \
		xsl

#RUN composer create-project --prefer-dist laravel/laravel cursoLaravel "5.3.*"
# EXECUTAR MANUALMENTE
#RUN php artisan serve --host 0.0.0.0 &

EXPOSE 8000