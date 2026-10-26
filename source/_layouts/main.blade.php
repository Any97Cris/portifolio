<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ $page->isPost ? $page->title . ' | ' . $page->siteName : $page->title }}</title>
  <meta name="description" content="{{ $page->isPost ? $page->excerpt() : $page->description }}">
  <meta name="keywords" content="{{ $page->keywords ?? '' }}">

  <!-- Favicons -->
  <link href="{{ $page->baseUrl }}/assets/img/favicon.png" rel="icon">
  <link href="{{ $page->baseUrl }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ $page->baseUrl }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ $page->baseUrl }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ $page->baseUrl }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ $page->baseUrl }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ $page->baseUrl }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ $page->baseUrl }}/assets/css/main.css" rel="stylesheet">
  <link href="{{ $page->baseUrl }}/assets/css/blog.css" rel="stylesheet">

  <!-- Syntax highlight dos blocos de código -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css" rel="stylesheet">

  @viteRefresh()
</head>

<body class="{{ $page->bodyClass ?? 'index-page' }}">

  @include('_partials.header')

  <main class="main">
    @yield('content')
  </main>

  @include('_partials.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ $page->baseUrl }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ $page->baseUrl }}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ $page->baseUrl }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ $page->baseUrl }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ $page->baseUrl }}/assets/vendor/typed.js/typed.umd.js"></script>
  <script src="{{ $page->baseUrl }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ $page->baseUrl }}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="{{ $page->baseUrl }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ $page->baseUrl }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ $page->baseUrl }}/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="{{ $page->baseUrl }}/assets/js/main.js"></script>
  <script src="{{ $page->baseUrl }}/assets/js/blog.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
  <script>hljs.highlightAll();</script>

</body>

</html>
