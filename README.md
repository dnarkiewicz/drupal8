# drupal8

Docker setup process (OSX):
* Manually set development tld and domain names in
  * /setup/2_hostnames.sh
  * /setup/3_ssl_certs.sh
* Run all files from setup/ in order
* Place any database dump file in /docker/db/initdb.d
* docker-compose up

Docker active development:
* Drupal modules must be installed via Composer from the drupal root dir
* Drupal modules must be enabled via UI or Drush from the drupal web/ dir
* Composer update is run during container init to catch any new composer file changes
* Composer install is run during container build to bake in vendor/ dir
* Drupal site or module config changes should be saved

Drupal Server Build Process:
* docker-compose file uses Dockerfiles within docker/ dir
* Ubuntu base with generic drupal install via composer
* copy over project specific files ( composer.json, web/~, config/ )
* run composer in drupal root to install contrib modules
* update ssl self-signed certs on the web instance

Docker Container Loading Process:
* app files in app/ dir are live mounted into containers
* data files in data/ dir are live mounted into containers
* project specific settings are loaded into the containter via ENV
* docker-specific overrides of any files are loaded in from docker/ dir
* ? config importer is run on project specific config directory
* composer is run against the composer.json in the container

S3Proxy:
* uses s3fs module in drupal
* drupal must access s3 without-ssl to work within docker
* nginx handles redirects to the s3 host
