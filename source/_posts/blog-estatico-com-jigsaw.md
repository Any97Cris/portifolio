---
title: Por que escolhi o Jigsaw para criar este blog
date: 2026-09-30
category: PHP
tags: [php, jigsaw, blade, sites-estaticos]
description: Gerador de sites estáticos em PHP com Blade e Markdown — juntando o que já conheço do Laravel com a simplicidade de um site estático.
---

Queria um lugar para registrar o que aprendo no dia a dia, mas sem a manutenção de um WordPress. Como já trabalho com PHP e Laravel, o **Jigsaw** foi uma escolha natural.

## O que é o Jigsaw

É um gerador de sites estáticos feito pela Tighten. Você escreve páginas em **Blade** e conteúdo em **Markdown**, roda um build e recebe HTML puro, pronto para hospedar em qualquer lugar.

## Como os posts funcionam

Cada post é um arquivo `.md` dentro de `source/_posts`, com um cabeçalho assim:

```yaml
---
title: Meu post
date: 2026-09-30
category: PHP
tags: [php, jigsaw]
---
```

No `config.php`, registrei a coleção `posts`, ordenada pela data mais recente:

```php
'collections' => [
    'posts' => [
        'path' => 'blog/{filename}',
        'sort' => '-date',
        'extends' => '_layouts.post',
    ],
],
```

## Vantagens que senti

- Hospedagem gratuita (GitHub Pages, Netlify, Vercel...);
- Nada de banco de dados para manter;
- Uso a mesma sintaxe Blade que já conheço.

Para escrever um post novo, basta criar um arquivo Markdown e rodar o build. Simples assim.
