---
title: Os comandos Git que eu mais uso no dia a dia
date: 2026-10-14
category: Git
tags: [git, terminal, produtividade]
description: Uma colinha pessoal com os comandos Git que salvam meu dia, do básico ao "desfaz isso pelo amor de Deus".
---

Não preciso decorar todos os comandos do Git, mas alguns aparecem todo santo dia. Deixo aqui minha colinha.

## Ver o que mudou

```bash
git status -s          # resumo curtinho
git diff               # o que mudou e ainda não foi para o stage
git diff --staged      # o que já está no stage
```

## Commits pequenos e frequentes

```bash
git add -p             # escolhe pedaço por pedaço o que entra no commit
git commit -m "mensagem clara do que mudou"
```

O `git add -p` mudou minha vida: ele me obriga a revisar o que estou commitando.

## Desfazendo coisas

```bash
git restore arquivo.php          # descarta alterações locais do arquivo
git restore --staged arquivo.php # tira do stage
git commit --amend               # corrige o último commit (antes do push!)
```

## Histórico bonito

```bash
git log --oneline --graph --decorate
```

> **Dica:** crie um alias para o comando acima com `git config --global alias.lg "log --oneline --graph --decorate"`.
