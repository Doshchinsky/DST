FROM debian:jessie
MAINTAINER Ilya Doshchinsky archie

RUN apt-get update && LC_ALL=C DEBIAN_FRONTEND=noninteractive apt-get install openssl slapd ldap-utils net-tools nano migrationtools ntp ntpdate -y

COPY ./start.sh /bin/start.sh

#ENTRYPOINT /bin/start.sh
CMD ["/bin/bash", "/bin/start.sh"]
