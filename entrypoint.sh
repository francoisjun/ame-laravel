#!/bin/bash

echo "Aguardando banco de dados ($DB_HOST:$DB_PORT)..."
until php -r "try { new PDO('mysql:host=$DB_HOST;port=$DB_PORT', '$DB_USERNAME', '$DB_PASSWORD'); } catch (Exception \$e) { exit(1); }"; do
  echo "Esperando..."
  sleep 5
done

php artisan migrate --force

exec apache2-foreground
