# drupal8 ***REMOVED*** xxxb xxxb

Docker setup process (OSX):
* Copy ./docker/env-default file to ./docker/env
* Manually set project's local development TLD and Domain Name (DEV_TLD) (DEV_HOST) in ./docker/env file
* Run docker/setup.sh
* Place any starter database dump file in /docker/initdb.d
* docker-compose up

Drupal active development:
* Drupal modules must be included in the composer.json file. They can be manually entered or can be installed via Composer from the drupal root dir
* Drupal modules must be enabled via UI or Drush from the drupal web/ dir
* Composer install is run during container build to create the vendor/ dir
* Composer update is run during each container start to catch any new composer file changes
* Drupal site or module config changes should be exported
* Drupal config import is run during each container start to catch any new config changes

Drupal Server Build Process:
* docker-compose file uses Dockerfiles within docker/build/ dirs
* Ubuntu base with generic drupal install via composer
* copy over project specific files like composer.json, sites/, and config/
* run "composer install" from drupal root to download contrib modules
* update ssl self-signed certs on the web instance so the docker instances can talk to each other

Docker Container Loading Process:
* Drupal specific files in the sites/ dir are live mounted into containers
* data files in data/ dir are live mounted into containers
* project specific settings are loaded into the containter via the ENV file
* docker-specific overrides of any files are loaded in from within docker/
* ? config importer is run on project specific config directory
* composer is run against the composer.json in the container

S3Proxy:
* uses s3fs module in drupal
* drupal must access s3 without-ssl to work within docker
* dockerized nginx handles internal redirects to the s3 host
