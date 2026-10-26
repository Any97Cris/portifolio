---
title: Pequenos truques de terminal Linux que aceleram meu trabalho
date: 2026-10-07
category: Linux
tags: [linux, bash, terminal]
description: Atalhos, aliases e comandos que fui juntando ao longo do tempo usando Linux como sistema principal.
---

Uso Linux no dia a dia e, com o tempo, fui juntando alguns truques que fazem diferença.

## Atalhos de teclado

| Atalho     | O que faz                              |
|------------|----------------------------------------|
| `Ctrl + R` | busca no histórico de comandos         |
| `Ctrl + A` | vai para o início da linha             |
| `Ctrl + E` | vai para o fim da linha                |
| `!!`       | repete o último comando                |

O clássico: esqueceu o `sudo`? Só rodar `sudo !!`.

## Aliases no `~/.bashrc`

```bash
alias ll='ls -lah'
alias dcu='docker compose up -d'
alias dcd='docker compose down'
alias gs='git status -s'
```

Depois de editar, recarregue com `source ~/.bashrc`.

## Encontrando arquivos e textos

```bash
find . -name "*.php" -mtime -1   # arquivos PHP alterados nas últimas 24h
grep -rn "TODO" source/          # procura TODOs no projeto
```

Nada revolucionário, mas somando todos esses segundos economizados, o ganho é grande.
