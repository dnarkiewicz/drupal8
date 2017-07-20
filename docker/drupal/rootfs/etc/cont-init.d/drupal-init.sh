#!/usr/bin/execlineb -P

with-contenv

cd /var/www/drupal
composer update
cd /var/www/drupal/web
drush cr
