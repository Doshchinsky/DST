FROM debian:jessie
MAINTAINER Ilya Doshchinsky archie

RUN apt-get update
RUN LC_ALL=C DEBIAN_FRONTEND=noninteractive apt-get install openssl slapd ldap-utils net-tools nano migrationtools -y

COPY ./start.sh /bin/start.sh

ENTRYPOINT /bin/start.sh
