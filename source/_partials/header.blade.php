<header id="header" class="header dark-background d-flex flex-column justify-content-between">
  <i class="header-toggle d-xl-none bi bi-list"></i>

  <div class="header-top">
    <div class="profile-img">
      <img src="/assets/img/profile/cris_foto.jpg" alt="cris-foto" class="img-fluid">
    </div>

    <a href="/" class="logo d-flex align-items-center justify-content-center">
      <h1 class="sitename">{{ $page->siteName ?? 'Mark Andersen' }}</h1>
    </a>
  </div>

  <nav id="navmenu" class="navmenu">
    <ul>
      <li><a href="/#hero"><i class="bi bi-house navicon"></i> Home</a></li>
      <li><a href="/#about"><i class="bi bi-person navicon"></i> About</a></li>
      <li><a href="/#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
      <li><a href="/#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
      <li><a href="/#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
      <li><a href="/#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
    </ul>
  </nav>

  <div class="social-links text-center">
    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
  </div>
</header>
