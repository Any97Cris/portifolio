@extends('_layouts.main')

@php
  $categorias = $posts->pluck('category')->filter()->unique()->sort()->values();
@endphp

@section('content')

  <!-- Hero Section -->
  <section id="hero" class="blog-hero section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <span class="hero-kicker"><i class="bi bi-terminal"></i> diário de uma dev</span>
          <h1>Tecnologia do meu <span class="accent-text">dia a dia</span></h1>
          <p class="hero-description">
            Aqui eu registro o que aprendo, os problemas que resolvo e as ferramentas que uso no trabalho:
            desenvolvimento web, PHP, Docker, Linux, Git e tudo que aparece pelo caminho.
          </p>
          <div class="hero-actions">
            <a href="#posts" class="btn-primary">Ler os posts</a>
            <a href="#sobre" class="btn-secondary">Sobre mim</a>
          </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block">
          <div class="hero-stats-box">
            <div class="stat-item">
              <span class="stat-number">{{ $posts->count() }}</span>
              <span class="stat-label">posts publicados</span>
            </div>
            <div class="stat-item">
              <span class="stat-number">{{ $categorias->count() }}</span>
              <span class="stat-label">assuntos</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- /Hero Section -->

  <!-- Posts Section -->
  <section id="posts" class="blog-posts section light-background">

    <div class="container section-title" data-aos="fade-up">
      <h2>Últimos posts</h2>
      <p>Anotações, tutoriais e aprendizados recentes</p>
    </div>

    <div class="container">
      <div class="blog-list" data-per-page="4">

        <ul class="blog-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">Todos</li>
          @foreach ($categorias as $categoria)
            <li data-filter=".filter-{{ $page->categorySlug($categoria) }}">{{ $categoria }}</li>
          @endforeach
        </ul>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
          @foreach ($posts as $post)
            <div class="col-lg-6 blog-item filter-{{ $post->categorySlug() }}">
              <article class="post-card">
                <div class="post-card-header">
                  <span class="post-category">{{ $post->category }}</span>
                  <div class="post-meta">
                    <span><i class="bi bi-calendar3"></i> {{ $post->formattedDate() }}</span>
                    <span><i class="bi bi-clock"></i> {{ $post->readingTime() }}</span>
                  </div>
                </div>
                <h3><a href="{{ $post->getUrl() }}">{{ $post->title }}</a></h3>
                <p>{{ $post->excerpt() }}</p>
                <a href="{{ $post->getUrl() }}" class="read-more">Continuar lendo <i class="bi bi-arrow-right"></i></a>
              </article>
            </div>
          @endforeach
        </div>

        <nav class="blog-pagination" aria-label="Paginação dos posts"></nav>

      </div>
    </div>

  </section><!-- /Posts Section -->

  <!-- About Section -->
  <section id="sobre" class="blog-about section">

    <div class="container section-title" data-aos="fade-up">
      <h2>Sobre mim</h2>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-center gy-4">
        <div class="col-lg-4 text-center">
          <img src="{{ $page->baseUrl }}/assets/img/profile/cris_foto.jpg" alt="{{ $page->siteName }}" class="img-fluid about-photo">
        </div>
        <div class="col-lg-8">
          <h3>Oi, eu sou a {{ $page->siteName }} 👋</h3>
          <p>
            Sou desenvolvedora e uso este blog como um caderno público. Sempre que resolvo um problema
            chato, descubro uma ferramenta nova ou aprendo algo interessante, escrevo aqui — primeiro para
            a Cris do futuro, e depois para quem mais puder aproveitar.
          </p>
          <p>
            Também sou fundadora da comunidade <strong>PHP Manaus</strong>, onde a gente se reúne para
            trocar experiências, compartilhar conhecimento e fortalecer o ecossistema PHP na região.
          </p>
          <div class="topics">
            <span><i class="bi bi-filetype-php"></i> PHP &amp; Laravel</span>
            <span><i class="bi bi-box-seam"></i> Docker</span>
            <span><i class="bi bi-ubuntu"></i> Linux</span>
            <span><i class="bi bi-git"></i> Git</span>
            <span><i class="bi bi-code-slash"></i> Web</span>
            <span><i class="bi bi-people"></i> Comunidade PHP Manaus</span>
          </div>
        </div>
      </div>
    </div>

  </section><!-- /About Section -->

@endsection
