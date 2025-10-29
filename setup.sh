#!/bin/bash

echo "=========================================="
echo "    SOCYTY LOCAL ENVIRONMENT SETUP"
echo "=========================================="
echo

docker-compose up -d --build

echo "⏳ Waiting for containers..."
sleep 10

docker exec laravel-app test -f .env || docker exec laravel-app cp .env.example .env

echo "📦 Installing Composer dependencies..."
docker exec laravel-app composer install --no-interaction --prefer-dist

echo "🎨 Installing Node dependencies & building project..."
docker exec laravel-app npm install
docker exec laravel-app npm run build

echo "🔑 Generating APP_KEY..."
docker exec laravel-app php artisan key:generate --force

echo "🗄️ Running migrations & seeder..."
docker exec laravel-app php artisan migrate:fresh --seed --force

echo "🔐 Fixing permissions..."
docker exec laravel-app chmod -R 777 storage bootstrap/cache

echo "🧹 Clearing cache..."
docker exec laravel-app php artisan optimize:clear

echo
echo "✅ SETUP COMPLETE!"
echo "🌐 Visit: http://socyty.127.0.0.1.nip.io"
