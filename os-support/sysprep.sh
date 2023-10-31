#!/bin/bash
service mariadb start
mysql -e "ALTER USER 'root'@'localhost' IDENTIFIED BY 'root'"
cd /var/www/html/chucknorris
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate --force --seed
cp os-support/chucknorris.conf /etc/apache2/sites-available/
a2dissite 00*
a2ensite chu*
chown -R www-data:www-data ./
service apache2 start
cd playwright
npm install
