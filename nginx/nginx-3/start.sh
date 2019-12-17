#!/bin/sh
/etc/init.d/ntp start
exec /usr/sbin/nginx -g "daemon off;"
while true
do
sleep 1
done
