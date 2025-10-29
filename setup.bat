@echo off
title Socyty Local Setup
echo ==========================================
echo       SOCYTY LOCAL ENVIRONMENT SETUP
echo ==========================================
echo.

REM --- START DOCKER ---
echo 🐳 Starting Docker containers...
docker-compose up -d --build

echo.
echo ⏳ Waiting for containers to initialize...
timeout /t 10 >nul

REM --- ENSURE .env EXISTS ---
echo 🔍 Checking .env in container...
docker exec laravel-app test -f .env || docker exec laravel-app cp .env.example .env

REM --- COMPOSER ---
echo 📦 Installing PHP dependencies (Composer)...
docker exec laravel-app composer install --no-interaction --prefer-dist

REM --- APPLICATION KEY ---
echo 🔑 Generating Application Key...
docker exec laravel-app php artisan key:generate --force

REM --- MIGRATIONS ---
echo 🗄️ Running database migrations + seed...
docker exec laravel-app php artisan migrate:fresh --seed --force

REM --- PERMISSIONS ---
echo 🔐 Setting permissions...
docker exec laravel-app chmod -R 777 storage bootstrap/cache

REM --- CLEAR CACHE ---
echo 🧹 Clearing caches...
docker exec laravel-app php artisan optimize:clear

echo.
echo ==========================================
echo ✅ SETUP COMPLETE!
echo 🌐 Visit: http://socyty.127.0.0.1.nip.io
echo ==========================================
pause

