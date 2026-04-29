#!/bin/bash
set -e

export PATH="$PATH:/app/vendor/bin"

echo "🚀 Iniciando aplicação..."

# Criar diretórios necessários
mkdir -p storage logs cache 2>/dev/null || true

# Instalar dependências PHP com Composer
if [ -f composer.json ]; then
    echo "📦 Instalando dependências PHP..."
    composer install --no-interaction --prefer-dist
fi

# Instalar dependências Node
if [ -f package.json ]; then
    echo "📦 Instalando dependências Node..."
    npm install
fi

echo "✅ Aplicação pronta!"

# Iniciar servidor de desenvolvimento Vite + Jigsaw watch
exec npm run dev
