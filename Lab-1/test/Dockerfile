FROM debian:jessie
MAINTAINER Ilya Doshchinsky archie

RUN apt-get update
RUN LC_ALL=C DEBIAN_FRONTEND=noninteractive apt-get install openssl openssh-server ldap-utils net-tools dnsutils sudo nano migrationtools libnss-ldap libpam-ldap nscd -y
RUN useradd -m -G adm,sudo -s /bin/bash archie && mkdir -p ~archie/.ssh && chown archie: ~archie/.ssh && echo "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQDBY0wxChaMR6iOD7IxH8+RN4WtD5p8xidHGyMzhC/3xEWlzCKupbQzq4Wn2oTyfGsQZ/pjJDn61PuRxwXOJ1p2+gZlIiNv+q8xGkY7SEU+LzuTSvAAppdld2tTG13VthJilDWWbbgZ8QgC4gBmxGHeoWC4KGMA1RPz+nVFcAGpPG+i1Lbzsowc9eTwgL7dYftCqlh/4hOeHks2BV92ZAmV1W82IvC2fAT5YfEZw27uI3Gy25jTWnuYnhZ3NhQexzkCvmdH1zM6/Ctx3N13uX5kMBrr2x9IN1f8NE9Y/I7FBXw4wyj6c+Ch2BWVfZRU7akTO2kJlI/lAQWtobEamh+pje47e8E5MqV9uCyVUOYQ5Ux6snKqJeoBobfidBNgILIgpCODvxIpfie4lPGiluuWhX7K+g+zOvS1SbRzkjxuOP0MmeduiK51xhQ2dY7o6pLeLJ5hRjQMAfwu39X1hc3Y4BPTVG9FMYzaksQ5hpqlsbrW/ieDBNvbiqrhmmk1Fnk= archie@Hyperion" >> ~archie/.ssh/authorized_keys && passwd -l root

COPY ./start.sh /bin/start.sh
COPY ./sshd_config /etc/ssh/sshd_config
COPY ./archie_sudoers /etc/sudoers.d/archie_sudoers
COPY ./clientconfig/ldap.conf /etc/ldap/ldap.conf
COPY ./clientconfig/libnss-ldap.conf /etc/libnss-ldap.conf
COPY ./clientconfig/pam_ldap.conf /etc/pam_ldap.conf
COPY ./clientconfig/libnss-ldap.secret /etc/libnss-ldap.secret
COPY ./clientconfig/pam_ldap.secret /etc/pam_ldap.secret
COPY ./clientconfig/nsswitch.conf /etc/nsswitch.conf

ENTRYPOINT /bin/start.sh
