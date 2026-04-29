#!/bin/bash
set -e

export PATH="$PATH:/app/vendor/bin"

echo "Iniciando ambiente..."

composer install --no-interaction --prefer-dist

npm install

php vendor/bin/jigsaw build local

echo "Ambiente pronto!"

exec tail -f /dev/null
