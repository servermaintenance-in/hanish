FROM php:8.2-apache

RUN apt-get update && apt-get install -y git && rm -rf /var/lib/apt/lists/*

CMD git clone https://github.com/servermaintenance-in/hanish.git /tmp/app && \
    cp -r /tmp/app/* /var/www/html/ && \
    apache2-foreground
