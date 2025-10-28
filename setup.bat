@echo off
title Socyty Local Setup
echo ==========================================
echo       SOCYTY LOCAL ENVIRONMENT SETUP
echo ==========================================
echo.

REM Check if Docker is running
echo Checking Docker service...
docker info >nul 2>&1
IF %ERRORLEVEL% NEQ 0 (
    echo [ERROR] Docker is not running.
    echo Please start Docker Desktop and rerun this script.
    pause
    exit /b
)

echo.
echo Building and starting Docker containers...
docker-compose up -d --build

echo.
echo Waiting for containers to initialize...
timeout /t 10 >nul

echo.
echo Installing Composer dependencies inside container...
docker exec -it laravel-app composer install

echo.
echo Installing Blade Icons packages...
docker exec -it laravel-app composer require postare/blade-mdi
docker exec -it laravel-app composer require mallardduck/blade-boxicons

echo.
echo Generating Application Key...
docker exec -it laravel-app php artisan key:generate

echo.
echo Running Database Migration and Seeder...
docker exec -it laravel-app php artisan migrate:fresh --seed

echo.
echo Setting storage permissions...
docker exec -it laravel-app chmod -R 777 storage bootstrap/cache

echo.
echo Clearing Laravel caches...
docker exec -it laravel-app php artisan optimize:clear

echo.
echo ==========================================
echo ✅ SETUP COMPLETE!
echo Application is ready to use.
echo.
echo Open in browser:
echo     http://socyty.127.0.0.1.nip.io
echo ==========================================
echo.
pause
