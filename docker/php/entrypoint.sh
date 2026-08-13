#!/bin/sh
set -e

cd /var/www/html

if [ ! -d vendor ]; then
    composer install --no-interaction --no-progress --prefer-dist
fi

if [ ! -d node_modules ]; then
    npm ci --no-audit --no-fund || npm install --no-audit --no-fund
fi

if [ ! -d public/build ]; then
    npm run build
fi

if [ ! -d public/storage ]; then
    php artisan storage:link
fi

if [ -f .env ] && ! grep -q "^APP_KEY=." .env; then
    php artisan key:generate
fi

exec "$@"
