

<div>
<nav class="unslate_co--site-mobile-menu">
    <div class="close-wrap d-flex">
      <a href="#" class="d-flex ml-auto js-menu-toggle">
        <span class="close-label">Close</span>
        <div class="close-times">
          <span class="bar1"></span>
          <span class="bar2"></span>
        </div>
      </a>
    </div>
    <div class="site-mobile-inner"></div>
  </nav>
  
  <nav class="unslate_co--site-nav site-nav-target">

        <div class="container">

          <div class="row align-items-center justify-content-between text-left">
            <div class="col-md-5 text-right">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li class="has-children">
                  <a href="{{ route('welcome') }}#home-section" class="nav-link">Home</a>
                  
                </li>
                <li><a href="{{ route('welcome') }}#portfolio-section" class="nav-link">Portfolio</a></li>
                <li><a href="{{ route('welcome') }}#about-section" class="nav-link">About</a></li>
                <li><a href="{{ route('welcome') }}#services-section" class="nav-link">Services</a></li>
              </ul>
            </div>
            <div class="site-logo pos-absolute">

              <a href="{{ route('welcome') }}" >
                <img src="{{ asset('images/logo white.png') }}" alt="Logo" class="header-logo">
              </a>

            </div>
            <div class="col-md-5 text-right text-lg-left">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li><a href="{{ route('welcome') }}#skills-section" class="nav-link">Skills</a></li>
                <li><a href="{{ route('welcome') }}#testimonial-section" class="nav-link">Testimonial</a></li>
                <li><a href="{{ route('welcome') }}#journal-section" class="nav-link">Journal</a></li>
                <li><a href="{{ route('welcome') }}#contact-section" class="nav-link">Contact</a></li>
              </ul>

              <ul class="site-nav-ul-none-onepage text-right d-inline-block d-lg-none">
                <li><a href="#" class="js-menu-toggle">Menu</a></li>
              </ul>

            </div>
          </div>
        </div>

      </nav>
      <!-- END nav -->
</div>