FROM debian:buster
MAINTAINER Ilya Doshchinsky archie

RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install ntp ntpdate nginx procps php-fpm php-mysql -y

COPY ./start.sh /bin/start.sh

EXPOSE 80/tcp

CMD ["/bin/bash", "/bin/start.sh"]
