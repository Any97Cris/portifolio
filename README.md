# Jigsaw + Vite + Docker

Site estático construído com [Jigsaw](https://jigsaw.tighten.com/) e [Vite](https://vitejs.dev/), servido com Nginx via Docker.

## Pré-requisitos

- [Docker Desktop](https://www.docker.com/products/docker-desktop/)
- [Git](https://git-scm.com/)

---

## Configuração inicial

Clone o repositório e crie o arquivo de ambiente:

```bash
git clone <url-do-repositorio>
cd jigsaw
cp .env.example .env
```

---

## Subir o ambiente

```bash
docker compose up --build
```

O container instala as dependências automaticamente e inicia o servidor Vite com live reload.

### Acessar o site

- **Site**: http://localhost:8080
- **Vite dev server**: http://localhost:3000

### Parar os containers

```bash
docker compose down
```

### Ver logs

```bash
docker compose logs -f
```

---

## Escrever um post

Crie um arquivo Markdown em `source/_posts/`. O nome do arquivo vira a URL (`/blog/nome-do-arquivo`):

```markdown
---
title: Título do post
date: 2026-10-25
category: Docker
tags: [docker, linux]
description: Resumo curto que aparece no card da página inicial.
---

Conteúdo do post em **Markdown**.
```

Os posts são ordenados do mais recente para o mais antigo, e as categorias viram filtros na página inicial automaticamente.

---

## Editar conteúdo

Edite os arquivos em `source/`. As mudanças são refletidas automaticamente no browser.

```
source/
├── _assets/
│   ├── css/main.css       # estilos (Tailwind)
│   └── js/main.js         # javascript
├── _layouts/
│   ├── main.blade.php     # layout principal
│   └── post.blade.php     # layout de cada post
├── _posts/                # posts do blog em Markdown
├── assets/css/blog.css    # estilos do blog
└── index.blade.php        # página inicial (lista de posts)
```

---

## Estrutura de arquivos

```
.
├── .docker/
│   ├── Dockerfile            # imagem PHP + Node.js
│   ├── entrypoint.sh         # inicialização do container
│   └── nginx.conf            # configuração do Nginx
├── source/                   # código-fonte do site
├── build_local/              # build gerado (ignorado no git)
├── .env                      # variáveis de ambiente (ignorado no git)
├── .env.example              # template de variáveis de ambiente
├── docker-compose.yml        # orquestração dos containers
├── vite.config.js            # configuração do Vite
└── config.php                # configuração do Jigsaw
```

---

## Comandos úteis

### Entrar no container

```bash
docker exec -it jigsaw-app bash
```

### Build manual

```bash
jigsaw build
```

### Instalar dependências

```bash
# PHP
composer install

# Node
npm install
```

---

## Template de origem

O design deste site é baseado no template **MyPage** do BootstrapMade:
[https://bootstrapmade.com/mypage-bootstrap-personal-template/](https://bootstrapmade.com/mypage-bootstrap-personal-template/)
