---
title: Montando um ambiente PHP com Docker sem dor de cabeça
date: 2026-10-20
category: Docker
tags: [docker, php, nginx, docker-compose]
description: Como organizei o ambiente deste blog com PHP, Node e Nginx usando Docker Compose — e os tropeços no caminho.
---

Toda vez que eu começava um projeto PHP novo, perdia um bom tempo instalando extensões, versões de Node e configurando servidor. Resolvi padronizar tudo com **Docker Compose**.

## A estrutura

Separei em dois serviços:

- **app**: imagem PHP + Node.js, onde rodam o Composer, o npm e o build do Jigsaw;
- **nginx**: só serve os arquivos estáticos gerados.

```yaml
services:
  app:
    build:
      context: .
      dockerfile: .docker/Dockerfile
    volumes:
      - .:/app
  nginx:
    image: nginx:alpine
    ports:
      - "8080:80"
```

## O tropeço da porta 80

Na primeira vez que subi o ambiente, o Nginx não iniciava. O motivo: já tinha outro serviço usando a porta 80 na minha máquina. A solução foi simples — mapear para a `8080`:

```bash
sudo lsof -i :80   # descobre quem está usando a porta
```

## Instalando dependências ao subir

Coloquei no `entrypoint.sh` o `composer install` e o `npm install`, assim qualquer pessoa que clonar o repositório só precisa rodar:

```bash
docker compose up --build
```

> **Lição do dia:** automatizar o setup economiza tempo não só para você, mas para quem vier depois.
