#!/bin/sh

chown -R mysql: /var/log/mysql
chown -R mysql: /var/lib/mysql

exec mysqld
