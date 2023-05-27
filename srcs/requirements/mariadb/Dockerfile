FROM alpine:3.17.3

ARG DB_USER
ARG DB_PASS
ARG DB_ROOT_PASS
ARG DB_NAME

EXPOSE 3306

RUN apk update && apk add mariadb mariadb-client && apk add openrc
RUN mkdir /run/openrc/ && touch /run/openrc/softlevel

COPY ./tools/db_setup.sh .
COPY ./conf/mariadb-server.cnf /etc/my.cnf.d/

RUN chmod a+x db_setup.sh
RUN ./db_setup.sh
RUN /etc/init.d/mariadb restart

ENTRYPOINT ["mysqld_safe"]
CMD ["--log-error=/var/lib/mysql/error.log"]