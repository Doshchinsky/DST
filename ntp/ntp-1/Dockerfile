FROM debian:jessie
MAINTAINER Ilya Doshchinsky archie

RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install ntp ntpdate sudo nano vim net-tools -y
RUN rm /etc/localtime ; ln -s /usr/share/zoneinfo/Asia/Novosibirsk /etc/localtime
COPY ./start.sh /bin/start.sh

#ENTRYPOINT /bin/start.sh
CMD ["/bin/bash", "/bin/start.sh"]
