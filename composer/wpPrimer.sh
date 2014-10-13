#!/bin/bash
#download/update wordpress
php /var/www/composer/composer.phar install;
php /var/www/composer/composer.phar update;
wait
echo "Moving wordpress folder and wp-config.php"
mv ./vendor/wordpress ../
mv ./wp-config.php ../wordpress
