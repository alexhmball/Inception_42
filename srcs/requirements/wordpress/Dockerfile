FROM alpine:3.17.3

EXPOSE 9000

WORKDIR /var/www/html

COPY ./conf/wp_install.sh .

RUN apk update && apk upgrade && \
	apk add --no-cache php php-fpm php-phar php81-mysqli php81-iconv php81-mbstring mariadb-client && \
	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
	chmod +x wp-cli.phar && \
	mv wp-cli.phar /usr/local/bin/wp && \
	wp core download
RUN apk add --no-cache openrc
RUN mkdir /run/openrc/ && touch /run/openrc/softlevel
RUN rc-update
RUN rc-status
RUN sed -i '/listen = 127.0.0.1:9000/c listen = wordpress:9000' /etc/php81/php-fpm.d/www.conf
RUN rc-update add php-fpm81
RUN chmod -R a+rwX /var/www/html && chmod 755 /var/www/html
RUN chmod a+x wp_install.sh


# RUN ./wp_install.sh

# ENTRYPOINT [ "wp_install.sh" ]
ENTRYPOINT ["sh"]
CMD ["./wp_install.sh"]