#!/bin/sh
while true
do
rndc reload && rsync -axu --password-file=/etc/rsyncd.secrets bind@dns-2.mag.local::dns/archie.local /etc/bind/archie.local && rndc reload
sleep 60
done
