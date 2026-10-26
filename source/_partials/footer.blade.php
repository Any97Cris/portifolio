<footer id="footer" class="footer light-background">
  <div class="container">
    <h3 class="sitename">{{ $page->siteName }}</h3>
    <p>Anotações sobre tecnologia, escritas no meio do dia a dia.</p>
    <div class="social-links d-flex justify-content-center">
      <a href="#"><i class="bi bi-github"></i></a>
      <a href="#"><i class="bi bi-linkedin"></i></a>
      <a href="#"><i class="bi bi-instagram"></i></a>
    </div>
    <div class="container">
      <div class="copyright">
        <span>&copy; {{ date('Y') }}</span> <strong class="px-1 sitename">{{ $page->siteName }}</strong>
      </div>
      <div class="credits">
        Design baseado no template <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </div>
</footer>
