#!/bin/sh
/etc/init.d/ntp start
/usr/sbin/php-fpm7.3 
while true
do
sleep 1
done
