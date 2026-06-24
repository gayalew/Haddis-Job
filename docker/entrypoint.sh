#!/bin/sh
set -e

# Platforms like Railway inject env vars directly — a .env file is not required.
# key:generate writes to .env, so only run it when that file exists or can be created.
if [ -z "$APP_KEY" ]; then
    if [ ! -f .env ] && [ -f .env.example ]; then
        cp .env.example .env
    fi

    if [ -f .env ]; then
        php artisan key:generate --force
    else
        echo "ERROR: APP_KEY is not set."
        echo "Add APP_KEY to your Railway environment variables."
        echo "Generate one locally with: php artisan key:generate --show"
        exit 1
    fi
fi

echo "Running database migrations..."
php artisan migrate --force

if [ "$RUN_SEED" = "true" ]; then
    echo "Seeding database..."
    php artisan db:seed --force
fi

exec "$@"
