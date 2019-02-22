service supervisor restart
supervisorctl restart all
crontab /etc/cron.d/cronfile -u root
service cron start
service nginx start
php-fpm