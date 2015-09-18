#!/bin/sh

service apache2 restart
service mysql restart
tail -f /var/log/main_website/access.log
