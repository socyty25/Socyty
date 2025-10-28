#!/bin/bash

echo "🚀 Starting Socyty environment setup..."

# 1. Build and start containers
echo "🐳 Building Docker containers..."
docker-compose build --no-cache
docker-compose up -d

# 2. Install composer dependencies inside container
echo "📦 Installing composer dependencies..."
docker exec -it laravel-app composer install --no-interaction --prefer-dist --optimize-autoloader

# 3. Install icon libraries
echo "🎨 Installing Blade Icon libraries..."
docker exec -it laravel-app composer require postare/blade-mdi --dev
docker exec -it laravel-app composer require mallardduck/blade-boxicons --dev

# 4. Generate key if missing
echo "🔑 Checking APP_KEY..."
docker exec -it laravel-app php artisan key:generate --force

# 5. Run migrations & seeders
echo "🗄️ Running migrations & seeders..."
docker exec -it laravel-app php artisan migrate:fresh --seed

# 6. Clear caches
echo "🧹 Clearing cache..."
docker exec -it laravel-app php artisan optimize:clear

echo ""
echo "✅ Setup completed successfully!"
echo "🌐 Visit your app at: http://socyty.127.0.0.1.nip.io"
echo ""
