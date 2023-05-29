FROM alpine:3.17.3

WORKDIR /var/www/html

COPY ./conf/default.conf .
COPY ./tools/ssl_cert.sh .

EXPOSE 443

RUN apk update && apk add --no-cache nginx
RUN mkdir -p /var/www/html
RUN chmod -R a+rwX /var/www/html && chmod 755 /var/www/html
RUN mv /var/www/html/default.conf /etc/nginx/http.d/default.conf
RUN chmod a+x ssl_cert.sh
RUN ./ssl_cert.sh

ENTRYPOINT [ "nginx" ]

CMD ["-g", "daemon off;"]