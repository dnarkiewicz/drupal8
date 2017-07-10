#!/bin/bash

cd /var/www/html
d8=$(echo "SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = 'd8' and TABLE_TYPE='BASE TABLE'" | mysql d8 -hmysql -uroot | sed -n 2p)
if [ "$d8" -eq "1" ]; then
drush site-install standard \
  --db-url='mysql://root:@mysql/d8' \
  --site-name=D8 \
  --account-name=admin \
  --account-pass=admin \
  -y;
fi

cd /var/www/html
mkdir -p /var/www/html/modules/contrib
mkdir -p /var/www/html/themes/contrib
# composer require drupal/uswds
# composer install

# cd /var/www/html/themes/contrib/uswds
# curl -LO https://github.com/18F/web-design-standards/releases/download/v1.1.0/uswds-1.1.0.zip
# unzip uswds-1.1.0.zip
# rm -rf assets
# mv uswds-1.1.0 assets
# rm uswds-1.1.0.zip
# chown -R www-data:www-data /var/www/html/themes
# drush pm-enable uswds -y
# drush pm-uninstall bartik -y
# drush config-set system.theme default uswds -y
# drush cr
