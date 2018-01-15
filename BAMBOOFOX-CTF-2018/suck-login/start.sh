#!/bin/sh
service mysql start
sleep 5
/usr/bin/mysql -u root < /root/db.sql
rm -f /var/run/apache2/apache2.pid
/usr/sbin/apachectl -D FOREGROUND
