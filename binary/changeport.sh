#/bin/sh

sed -i "s/- \"[0-9][0-9]*:/- \"${1}:/g" ./docker-compose.yml
cat ./docker-compose.yml
