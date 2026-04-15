#!/bin/bash

#iniciar PHP-FPM en background
php-fpm &

#esperar un poco
sleep 3

#Genera key si no existe
php artisan key:generate --force

#migraciones
php artisan migrate --force

#cachear config
php artisan config:cache
php artisan route:cache
php artisan view:cache

#iniciar nginx
nginx -g "daemon off;"
