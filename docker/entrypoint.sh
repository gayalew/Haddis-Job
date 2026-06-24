#!/bin/sh
set -e

if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force
fi

echo "Running migrations and seeding database ..."
php artisan migrate --force
php artisan db:seed --force

exec "$@"
