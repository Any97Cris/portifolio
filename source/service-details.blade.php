@extends('_layouts.main')

@php
  $page->title = 'Service Details - ' . ($page->siteName ?? 'Mark Andersen');
  $page->description = '';
  $page->bodyClass = 'service-details-page';
@endphp

@section('content')

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container">
      <h1>Service Details</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">Service Details</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Service Details Section -->
  <section id="service-details" class="service-details section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-5">

        <div class="col-lg-8">

          <div class="service-content">

            <div class="service-hero" data-aos="fade-up" data-aos-delay="200">
              <h2>Web Development &amp; Design</h2>
              <p class="lead">Creating modern, responsive websites that elevate your brand and engage your audience. From concept to launch, I craft digital experiences that perform beautifully across all devices.</p>
            </div>

            <div class="service-image" data-aos="zoom-in" data-aos-delay="300">
              <img src="/assets/img/services/services-3.webp" alt="Web Development" class="img-fluid">
            </div>

            <div class="service-description" data-aos="fade-up" data-aos-delay="400">
              <h3>What's Included</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

              <div class="features-list">
                <div class="feature-item">
                  <i class="bi bi-palette"></i>
                  <div>
                    <h4>Custom Design</h4>
                    <p>Unique visual identity tailored to your brand and target audience preferences.</p>
                  </div>
                </div>
                <div class="feature-item">
                  <i class="bi bi-code-slash"></i>
                  <div>
                    <h4>Clean Development</h4>
                    <p>Semantic HTML, modern CSS, and optimized JavaScript for fast loading times.</p>
                  </div>
                </div>
                <div class="feature-item">
                  <i class="bi bi-phone"></i>
                  <div>
                    <h4>Mobile First</h4>
                    <p>Responsive design that looks perfect on all devices and screen sizes.</p>
                  </div>
                </div>
                <div class="feature-item">
                  <i class="bi bi-search"></i>
                  <div>
                    <h4>SEO Optimized</h4>
                    <p>Built with search engine optimization best practices from the ground up.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="process-section" data-aos="fade-up" data-aos-delay="500">
              <h3>My Process</h3>
              <div class="process-steps">
                <div class="step">
                  <div class="step-number">01</div>
                  <h4>Discovery</h4>
                  <p>Understanding your goals, target audience, and project requirements through detailed consultation.</p>
                </div>
                <div class="step">
                  <div class="step-number">02</div>
                  <h4>Design</h4>
                  <p>Creating wireframes and visual designs that align with your brand and user experience goals.</p>
                </div>
                <div class="step">
                  <div class="step-number">03</div>
                  <h4>Development</h4>
                  <p>Building your website with clean code, responsive layouts, and performance optimization.</p>
                </div>
                <div class="step">
                  <div class="step-number">04</div>
                  <h4>Launch</h4>
                  <p>Testing, refinement, and deployment with ongoing support and maintenance options.</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="col-lg-4">

          <div class="service-sidebar">

            <div class="service-info" data-aos="fade-up" data-aos-delay="600">
              <h4>Project Details</h4>
              <ul class="info-list">
                <li><strong>Timeline:</strong> 4-6 weeks</li>
                <li><strong>Revisions:</strong> 3 rounds included</li>
                <li><strong>Technologies:</strong> HTML, CSS, JavaScript</li>
                <li><strong>Support:</strong> 30 days post-launch</li>
              </ul>
            </div>

            <div class="testimonial-block" data-aos="fade-up" data-aos-delay="700">
              <div class="quote-icon">
                <i class="bi bi-quote"></i>
              </div>
              <blockquote>
                "Working with this developer was an absolute pleasure. The attention to detail and creative solutions exceeded our expectations."
              </blockquote>
              <div class="testimonial-author">
                <img src="/assets/img/person/person-f-3.webp" alt="Client" class="author-image">
                <div class="author-info">
                  <h5>Sarah Johnson</h5>
                  <span>Creative Director</span>
                </div>
              </div>
            </div>

            <div class="cta-block" data-aos="fade-up" data-aos-delay="800">
              <h4>Ready to Start?</h4>
              <p>Let's discuss your project and bring your vision to life.</p>
              <a href="#" class="btn btn-primary">Get a Quote</a>
              <a href="#" class="btn btn-outline">View Portfolio</a>
            </div>

          </div>

        </div>

      </div>

    </div>

  </section><!-- /Service Details Section -->

@endsection
