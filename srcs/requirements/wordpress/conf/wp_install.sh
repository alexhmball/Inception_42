#!/bin/sh
if ![ ls | grep wp-config.php]
then
mv wp-config-sample.php wp-config.php

wp core install  --title="SAND HALP" --admin_user=$WP_ADMIN --admin_password=$WP_PASS
fi