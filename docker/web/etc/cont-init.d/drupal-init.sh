#!/usr/bin/with-contenv sh

# [ -f /certs/star-server-cert.pem ] \
#     && cp /certs/star-server-cert.pem /usr/local/share/ca-certificates/star-server-cert.pem.crt

# [ -f /certs/db-server-cert.pem ] \
#     && cp /certs/db-server-cert.pem /usr/local/share/ca-certificates/db-server-cert.pem.crt

# [ -f /certs/es-server-cert.pem ] \
#     && cp /certs/es-server-cert.pem /usr/local/share/ca-certificates/es-server-cert.pem.crt

# [ -f /certs/s3-server-cert.pem ] \
#     && cp /certs/s3-server-cert.pem /usr/local/share/ca-certificates/s3-server-cert.pem.crt

# [ -f /certs/redis-server-cert.pem ] \
#     && cp /certs/redis-server-cert.pem /usr/local/share/ca-certificates/redis-server-cert.pem.crt

#update-ca-certificates --fresh

[ -f /var/www/drupal/composer.json ] \
  && cd /var/www/drupal \
  && composer update \
  && cd /var/www/drupal/web \
  && drush cr
