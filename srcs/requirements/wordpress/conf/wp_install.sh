#!/bin/sh
ls | grep wp-config.php

if [ $? -eq 1 ];
then
mv wp-config-sample.php wp-config.php

sed -i "s/database_name_here/$DB_NAME/g" wp-config.php
sed -i "s/username_here/$DB_USER/g" wp-config.php
sed -i "s/password_here/$DB_PASS/g" wp-config.php
sed -i "s/localhost/$DB_HOST/g" wp-config.php

wp core install --url=$WP_URL --title="SAND HALP" --admin_user=$WP_ADMIN --admin_password=$WP_PASS --admin_email=$WP_E_A
wp user create $WP_USER $WP_E --role=editor --user_pass=$WP_PASS
fi

php-fpm81 -F