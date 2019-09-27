FROM debian:jessie
MAINTAINER Ilya Doshchinsky archie

RUN apt-get update
RUN DEBIAN_FRONTEND=noninteractive apt-get install bind9 bind9-host dnsutils net-tools rsync openssh-server cron -y

ENV BIND_USER=bind

EXPOSE 53/udp 53/tcp 873/tcp

COPY ./start.sh /bin/start.sh
COPY ./updatedns.sh /bin/updatedns.sh

ENTRYPOINT /bin/start.sh
