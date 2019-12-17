#!/bin/sh
mkdir -p /var/run/sshd
/etc/init.d/ntp start &
exec /usr/sbin/sshd -D
