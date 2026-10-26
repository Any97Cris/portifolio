---
title: Variáveis de ambiente e o famoso arquivo .env
date: 2026-09-22
category: PHP
tags: [php, laravel, segurança, env]
description: Por que senhas e chaves nunca devem ir para o repositório, e como o .env ajuda a separar configuração de código.
---

Um dos primeiros sustos de quem começa: subir uma senha de banco para o GitHub. O arquivo `.env` existe justamente para evitar isso.

## A ideia

Configurações que mudam entre ambientes (local, homologação, produção) ficam **fora do código**:

```bash
APP_ENV=local
DB_HOST=127.0.0.1
DB_PASSWORD=segredo
```

## Regras que sigo

- O `.env` **sempre** está no `.gitignore`;
- O repositório tem um `.env.example`, sem valores sensíveis, para servir de modelo;
- Quem clona o projeto roda `cp .env.example .env` e preenche os próprios valores.

## Lendo no PHP

```php
$host = getenv('DB_HOST') ?: '127.0.0.1';
```

No Laravel, use `env()` apenas nos arquivos de `config/` e, no resto do código, `config('database.connections.mysql.host')`.

> **Se vazou:** troque a senha imediatamente. Apagar o commit não basta — o histórico já foi copiado.
