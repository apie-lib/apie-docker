#!/bin/sh
set -e

echo "Starting container with FRAMEWORK=${FRAMEWORK} and PHP_VARIANT=${PHP_VARIANT}"

if [ "$FRAMEWORK" = "laravel" ]; then
  echo "Generate app key"
  exec php artisan key:generate
fi

if [ "$PHP_VARIANT" = "cli" ]; then
  echo "Running in CLI mode (built-in PHP server)"
  exec php -S 0.0.0.0:8000 -t public
elif [ "$PHP_VARIANT" = "fpm" ]; then
  echo "Running in FPM mode"
  exec php-fpm
else
  echo "Unknown PHP_VARIANT: $PHP_VARIANT"
  exit 1
fi
