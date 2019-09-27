#!/bin/sh
chown -R root:bind /etc/bind
chmod -R a+rwx /etc/bind
/usr/bin/rsync --daemon
/bin/updatedns.sh &
exec /usr/sbin/named -g
