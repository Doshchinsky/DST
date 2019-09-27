#!/bin/sh
while true
do
sleep 60
rndc reload && rsync -axu --password-file=/etc/rsyncd.secrets bind@dns-1.mag.local::dns/archie.local /etc/bind/archie.local && rndc reload
done
