#!/bin/sh
rm -f /var/run/apache2/apache2.pid
/usr/sbin/apachectl -D FOREGROUND
