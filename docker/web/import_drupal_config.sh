#!/bin/bash

cd /var/www/drupal
drupal config:import --no-interaction --yes --directory /var/www/drupal/config/
