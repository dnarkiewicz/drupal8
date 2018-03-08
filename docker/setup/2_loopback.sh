#!/bin/bash
echo

# loopback set to ipv4 address 10.0.2.2
echo "-- 10.0.2.2 Installing as Loopback ..."
if [ -f ./org.ctac.loopback.plist ]; then
    sudo cp -v ./org.ctac.loopback.plist /Library/LaunchDaemons
elif [ -f ./setup/org.ctac.loopback.plist ]; then
    sudo cp -v ./setup/org.ctac.loopback.plist /Library/LaunchDaemons
fi
sudo launchctl load -w /Library/LaunchDaemons/org.ctac.loopback.plist
