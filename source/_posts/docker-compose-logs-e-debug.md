---
title: Descobrindo por que meu container não sobe
date: 2026-09-15
category: Docker
tags: [docker, debug, logs]
description: O passo a passo que sigo quando um container cai, reinicia em loop ou simplesmente não responde.
---

Container que não sobe é rotina. Com o tempo, criei um roteiro para não sair chutando.

## 1. Ver o status

```bash
docker compose ps
```

Se aparecer `Restarting` ou `Exited`, o problema está na inicialização.

## 2. Ler os logs

```bash
docker compose logs -f app
```

Na maioria das vezes a resposta está aqui: dependência faltando, permissão negada ou porta ocupada.

## 3. Entrar no container

```bash
docker exec -it jigsaw-app-portifolio bash
```

Lá dentro dá para testar comandos, conferir arquivos e variáveis de ambiente.

## 4. Recomeçar do zero

```bash
docker compose down
docker compose up --build
```

> **Dica:** antes de reconstruir tudo, leia o log com calma. Ele quase sempre diz exatamente o que está errado.
