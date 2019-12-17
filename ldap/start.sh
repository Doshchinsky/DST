#!/bin/sh
chown -R openldap: /etc/ldap
chown -R openldap: /var/lib/ldap
chown -R openldap: /var/run/slapd
/etc/init.d/ntp start
exec /usr/sbin/slapd -u openldap -g openldap -d 1
