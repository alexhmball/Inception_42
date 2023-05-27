FROM alpine:3.17.3

EXPOSE 9000

WORKDIR /var/www/html

RUN apk update && apk upgrade && \
	apk add php php-fpm php-phar php81-mysqli mariadb-client && \
	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
	chmod +x wp-cli.phar && \
	mv wp-cli.phar /usr/local/bin/wp
RUN apk add openrc
RUN mkdir /run/openrc/ && touch /run/openrc/softlevel
RUN rc-update
RUN rc-status
RUN sed -i '/listen = 127.0.0.1:9000/c listen = 0.0.0.0:9000' /etc/php81/php-fpm.d/www.conf
RUN rc-update add php-fpm81
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xzvf latest.tar.gz
# RUN mv /var/www/html/wordpress/wp-config-sample.php /var/www/html/wordpress/wp-config.php
RUN chmod -R a+rwX /var/www/html && chmod 755 /var/www/html

# COPY ./conf/wp-config.php ./wordpress

ENTRYPOINT ["php-fpm81"]
CMD ["-F"]