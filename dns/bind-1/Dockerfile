FROM debian:jessie
MAINTAINER Ilya Doshchinsky archie

RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install bind9 bind9-host dnsutils net-tools rsync openssh-server ntp ntpdate -y

ENV BIND_USER=bind

COPY ./start.sh /bin/start.sh
COPY ./updatedns.sh /bin/updatedns.sh

#ENTRYPOINT /bin/start.sh
CMD ["/bin/bash", "/bin/start.sh"]
