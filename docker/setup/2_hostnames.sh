#!/bin/bash

[ -f ./env ]     && source ./env
[ -f ../env ]    && source ../env
[ -f ../../env ] && source ../../env
[ -f docker/env ] && source docker/env

echo

# .dev and .local domains
if which dnsmasq >/dev/null; then
    echo "-- DNSMasq Installed already ..."
else
    echo "** DNSMasq Installing ... "
    brew install dnsmasq
fi
echo "** DNSMasq Configuring LaunchDaemon... "
sudo cp -v $(brew --prefix dnsmasq)/homebrew.mxcl.dnsmasq.plist /Library/LaunchDaemons

echo "** DNSMasq Configuring resolver ... "
sudo mkdir -v /etc/resolver 2>&1 >/dev/null
echo "nameserver 127.0.0.1" | sudo tee /etc/resolver/${DEV_TLD} 2>&1 >/dev/null

echo "** DNSMasq Configuring *.${DEV_TLD} ... "
sudo mkdir -vp $(brew --prefix)/etc/
sudo tee $(brew --prefix)/etc/dnsmasq.conf 2>&1 >/dev/null <<-EOF
listen-address=127.0.0.1
address=/.${DEV_TLD}/127.0.0.1
# keep nameserver order of resolv.conf
strict-order
EOF

sudo launchctl load -w /Library/LaunchDaemons/homebrew.mxcl.dnsmasq.plist
