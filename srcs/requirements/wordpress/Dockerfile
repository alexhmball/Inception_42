FROM alpine:3.17.3

EXPOSE 9000

WORKDIR /var/www/html

ARG DB_HOST
ARG DB_NAME
ARG DB_ROOT_PASS
ARG DB_USER
ARG WP_USER
ARG WP_PASS
ARG WP_ADMIN

RUN apk --no-cache update && apk --no-cache upgrade && \
	apk add --no-cache php php-fpm php-phar php81-mysqli mariadb-client && \
	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
	chmod +x wp-cli.phar && \
	mv wp-cli.phar /usr/local/bin/wp && \
	wp core download
RUN apk add --no-cache openrc
RUN mkdir /run/openrc/ && touch /run/openrc/softlevel
RUN rc-update
RUN rc-status
RUN sed -i '/listen = 127.0.0.1:9000/c listen = 0.0.0.0:9000' /etc/php81/php-fpm.d/www.conf
RUN rc-update add php-fpm81
RUN chmod -R a+rwX /var/www/html && chmod 755 /var/www/html

COPY ./conf/wp_install.sh .

ENTRYPOINT ["php-fpm81"]
CMD ["-F"]