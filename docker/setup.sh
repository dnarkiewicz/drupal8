#!/bin/bash

for file in ./docker/setup/*.sh
do
  bash $file;
done
