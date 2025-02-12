#unica tag obrigatória deve colocar a imagem base
FROM php:8.3-apache-bullseye
#defini o diretorio onde serão executados os comando RUN
WORKDIR /var/www/html
#executa no momento de criação da imagem

RUN pecl install xdebug 
RUN docker-php-ext-enable xdebug

RUN apt-get update && apt-get install -y \
    curl \
    libpq-dev \
    zip \
    unzip \
    openssl \
    && docker-php-ext-install pdo pdo_pgsql pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#copia os arquivos do diretorio atual para o diretorio /var/www/html do container
COPY . /var/www/html

#RUN composer install --optimize-autoloader --no-dev

#RUN chown -R www-data:www-data /var/www/html
#RUN chmod -R 775 /var/www/html/storage

#RUN curl -sL https://deb.nodesource.com/setup_18.x | bash -

#RUN apt-get install -y nodejs

RUN chown -Rf www-data:www-data /var/www/ && \
a2enmod rewrite && service apache2 restart

RUN chmod 777 /var/www/html/apache/log -R

#expõe uma porta
EXPOSE 80
