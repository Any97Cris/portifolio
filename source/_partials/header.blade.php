<header id="header" class="header dark-background d-flex flex-column justify-content-between">
  <i class="header-toggle d-xl-none bi bi-list"></i>

  <div class="header-top">
    <a href="{{ $page->baseUrl }}/" class="logo d-flex align-items-center justify-content-center">
      <h1 class="sitename">{{ $page->siteName }}</h1>
    </a>
    <p class="site-tagline text-center">Tecnologia do dia a dia</p>
  </div>

  <nav id="navmenu" class="navmenu">
    <ul>
      <li><a href="{{ $page->baseUrl }}/#hero"><i class="bi bi-house navicon"></i> Início</a></li>
      <li><a href="{{ $page->baseUrl }}/#posts"><i class="bi bi-journal-text navicon"></i> Posts</a></li>
      <li><a href="{{ $page->baseUrl }}/#sobre"><i class="bi bi-person navicon"></i> Sobre</a></li>
    </ul>
  </nav>

  <div class="social-links text-center">
    <a href="#" class="github"><i class="bi bi-github"></i></a>
    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
  </div>
</header>
