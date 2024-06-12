FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive

RUN apt update && apt install -y software-properties-common ca-certificates \
    lsb-release apt-transport-https supervisor nginx ssh curl git zip unzip \
    openssl libpng-dev libonig-dev libxml2-dev

RUN LC_ALL=C.UTF-8 add-apt-repository -y ppa:ondrej/php
RUN apt update && apt install -y php8.3-fpm php8.3-mysql php8.3-xml php8.3-curl

RUN mkdir /run/php
RUN mkdir /run/sshd

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

RUN curl -sL https://deb.nodesource.com/setup_20.x -o nodesource_setup.sh
RUN bash nodesource_setup.sh
RUN apt install -y nodejs

# password for SSH user
RUN useradd -r -s /bin/bash -G sudo,root,www-data -u 1001 -d /home/orlov orlov
RUN echo 'orlov:orlov' | chpasswd

WORKDIR /var/www/lara0

COPY . ./
COPY ./composer.json ./
RUN composer install --optimize-autoloader --no-scripts

php artisan config:clear
RUN php artisan key:generate
RUN php artisan cache:clear
RUN php artisan view:clear

RUN chown -R orlov:www-data .
RUN chmod -R 775 ./storage/logs ./storage/framework ./bootstrap/cache

RUN npm install -g npm@latest
RUN npm install

RUN npm run build

EXPOSE 80 22 5137

COPY ./dist/nginx-default.conf /etc/nginx/sites-available/default
COPY ./dist/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
