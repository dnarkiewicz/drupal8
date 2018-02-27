#!/bin/bash
echo

# we use wget 
if which wget >/dev/null; then
    echo "-- Wget Installed already ..."
else
    echo "** Wget Installing ... "
    brew install wget
fi