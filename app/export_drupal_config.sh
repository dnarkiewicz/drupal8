#!/bin/bash

cd /var/www/drupal
drupal config:export --no-interaction --yes --directory /var/www/drupal/config/
