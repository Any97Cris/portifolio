@extends('_layouts.main')

@php
  $page->bodyClass = 'post-page';
@endphp

@section('content')

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container">
      <span class="post-category">{{ $page->category }}</span>
      <h1>{{ $page->title }}</h1>
      <div class="post-meta justify-content-center">
        <span><i class="bi bi-calendar3"></i> {{ $page->formattedDate() }}</span>
        <span><i class="bi bi-clock"></i> {{ $page->readingTime() }}</span>
      </div>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ $page->baseUrl }}/">Início</a></li>
          <li><a href="{{ $page->baseUrl }}/#posts">Posts</a></li>
          <li class="current">{{ $page->title }}</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <section class="post-content section">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-lg-9">

          <article class="post-body">
            @yield('postContent')
          </article>

          @if ($page->tags)
            <div class="post-tags">
              <i class="bi bi-tags"></i>
              @foreach ($page->tags as $tag)
                <span class="tag">#{{ $tag }}</span>
              @endforeach
            </div>
          @endif

          <nav class="post-nav">
            @if ($next = $page->getNext())
              <a href="{{ $next->getUrl() }}" class="post-nav-link">
                <small><i class="bi bi-arrow-left"></i> Post anterior</small>
                <span>{{ $next->title }}</span>
              </a>
            @else
              <span></span>
            @endif

            @if ($previous = $page->getPrevious())
              <a href="{{ $previous->getUrl() }}" class="post-nav-link text-end">
                <small>Próximo post <i class="bi bi-arrow-right"></i></small>
                <span>{{ $previous->title }}</span>
              </a>
            @endif
          </nav>

        </div>
      </div>
    </div>
  </section>

@endsection
