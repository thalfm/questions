#!/bin/bash
set -e

echo "[ ****************** ] Starting Endpoint of Application [ ****************** ]"

echo "Back - Starting Endpoint of Application"
if [ -d "./vendor" ]; then
    echo "Execute DB Migration"
    php artisan module:migrate
    echo "Execute Seeders"
    php artisan module:seed
fi

chmod 777 -R storage/
chmod 777 -R bootstrap/cache/

exec "$@"

set -- php-fpm

exec "$@"
