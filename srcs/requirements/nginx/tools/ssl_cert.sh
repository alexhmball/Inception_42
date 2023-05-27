#!/bin/sh
apk add openssl
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt << EOF
AE
Abu Dhabi
Abu Dhabi
42 Abu Dhabi

aball.42.fr
mail@mail.com
EOF