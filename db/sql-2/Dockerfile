FROM debian:buster
MAINTAINER Alexey Romanuta R9ODT

RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install nano ntp ntpdate mariadb-server -y
RUN apt-get update && apt-get install -y procps 

COPY ./start.sh /bin/start.sh

EXPOSE 3306/tcp

#ENTRYPOINT /bin/start.sh
CMD ["/bin/bash", "/bin/start.sh"]
