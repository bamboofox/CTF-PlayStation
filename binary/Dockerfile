FROM ubuntu:16.04
MAINTAINER unknonwn
LABEL Description="Challenge Base" VERSION='1.0'

# installation
RUN dpkg --add-architecture i386
RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y build-essential xinetd vim libc-dev:i386 libssl-dev libssl-dev:i386 libc6-dev-i386
RUN adduser --disabled-password --gecos '' ctf
RUN chmod 755 /home/ctf
CMD ["/usr/sbin/xinetd", "-dontfork"]

WORKDIR /
