#!/bin/bash
echo

echo "-- Creating s3 bucket directory"
cd docker/data
[[ -d s3 ]] || mkdir s3
chmod 755 s3

[[ -d s3/drupal ]] || mkdir s3/drupal
chmod 755 s3/drupal

# maybe try and auto-download all data from actual s3 bucket
