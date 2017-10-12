#!/bin/bash
echo

echo "-- Creating s3 bucket directory"
cd data
[[ -d s3 ]] || mkdir s3
chmod 755 s3

[[ -d s3/d8-files ]] || mkdir s3/d8-files
chmod 755 s3/d8-files

# maybe try and auto-download all data from actual s3 bucket
