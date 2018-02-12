# drupal8

Drupal Server Build Process:
* edit docker-compose file
* Ubuntu base with generic drupal install via composer
* copy over project specific files ( composer.json, web/~, config/ )
* run composer in drupal root to install contrib modules
* run config importer from project specific files to setup site configs

Docker setup process (OSX):
* manually set domain names in setup/2_hostnames.sh and setup/3_ssl_certs.sh
* run all files from setup/ in ordeR

Docker Dev process:
* cd docker/
* docker-compose up
* app files in app/drupal/ are live mounted into containers
* data files in data/ are live mounted into containers
* GO GO GO

