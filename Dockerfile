FROM debian:buster

ENV  AUTOINDEX=on;

RUN apt-get update \
    && apt-get install -y \
        nginx \
        mariadb-server \
        php7.3-fpm \
        php7.3-mbstring \
        php7.3-mysql \
        php7.3-xml \
        wget \
        curl \
        vim

COPY    srcs/index.html /var/www/html/index.html

#nginx
COPY    srcs/nginx.conf /etc/nginx/sites-available/root

RUN     sed -i "s/&AUTOINDEX&/$AUTOINDEX/g" /etc/nginx/sites-available/root; \
        ln -s /etc/nginx/sites-available/root /etc/nginx/sites-enabled/root;
        
RUN     rm /etc/nginx/sites-enabled/default /var/www/html/index.nginx-debian.html

#setup database
COPY    srcs/db_script.sql /
RUN     service mysql start && \
        mysql < db_script.sql && \
        rm db_script.sql

#wordpress
RUN	wget https://wordpress.org/latest.tar.gz && \
	tar -xzvf latest.tar.gz && \
	mv wordpress /var/www/html && \
	rm -rf latest.tar.gz
COPY	srcs/wp-config.php /var/www/html/wordpress/wp-config.php

#phpmyadmin
RUN	wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-all-languages.tar.gz && \
	tar -xzvf phpMyAdmin-5.1.0-all-languages.tar.gz && \
	mv phpMyAdmin-5.1.0-all-languages/ /var/www/html/phpmyadmin && \
	rm -rf phpMyAdmin-5.1.0-all-languages.tar.gz
COPY	srcs/config.inc.php /var/www/html/phpmyadmin/config.inc.php

#SSL certificate
RUN     openssl req -x509 -new -newkey rsa:4096 -nodes -days 365 -keyout /etc/ssl/private/ssl-cert-snakeoil.key -out /etc/ssl/certs/ssl-cert-snakeoil.pem -subj '/C=FR'
 
#nginx access to the files 
RUN	chown -R www-data:www-data /var/www/html/*
RUN	chmod 755 var/www/html

EXPOSE	80 
EXPOSE  443

#script
COPY	srcs/script_service_start.sh ./
CMD	sh script_service_start.sh

