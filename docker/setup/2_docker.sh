#!/bin/bash
echo

# setup Docker for mac
if which Docker >/dev/null; then
    echo "-- Docker Installed already ..."
else
    echo "** Docker Installing ... "
    if [ ! -f ./Docker.dmg ]; then
        wget --no-check-certificate https://download.docker.com/mac/stable/Docker.dmg
    fi;
    hdiutil mount ./Docker.dmg
    sudo cp -R /Volumes/Docker/Docker.app /Applications
    hdiutil umount /Volumes/Docker/
    #rm -f ./Docker.dmg
fi