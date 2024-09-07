@extends('master')
@section('content')
<div>
<div class="cover-v1 jarallax" id="home-section">
        <video autoplay muted loop class="bg-video">
          <source src="images/video.mp4" type="video/mp4" />
        </video>
        <div class="container">
          <div class="row align-items-center" style="justify-content: center;">

            <div class="col-md-7 mx-auto text-center" style="margin: 0px;padding: 0px;">
              <h2 class="subheading gsap-reveal-hero">Hey, I'm</h2>
              <h1 class="heading gsap-reveal-hero">Aymane Eloirdiwi</h1>
              <h2 class="subheading gsap-reveal-hero">A Graphic Designer Based In Casablanca</h2>
            </div>

          </div>
        </div>


        <a href="#portfolio-section" class="mouse-wrap smoothscroll">
          <span class="mouse">
            <span class="scroll"></span>
          </span>
          <span class="mouse-label">Scroll</span>
        </a>

      </div>
      <!-- END .cover-v1 -->
      <div class="unslate_co--section" id="portfolio-section">
        <div class="container">


          <div class="relative">
            <div class="loader-portfolio-wrap">
              <div class="loader-portfolio"></div>
            </div>
          </div>
          <div id="portfolio-single-holder"></div>

          <div class="portfolio-wrapper">

            <div class="d-flex align-items-center mb-4 gsap-reveal gsap-reveal-filter">
              <h2 class="mr-auto heading-h2"><span class="gsap-reveal">Portfolio</span></h2>

              <a href="#" class="text-white js-filter d-inline-block d-lg-none">Filter</a>

              <!--<div class="filter-wrap">
                <div class="filter ml-auto" id="filters">
                  <a href="#" class="active" data-filter="*">All</a>
                  <a href="#" data-filter=".web">Web</a>
                  <a href="#" data-filter=".branding">Branding</a>
                  <a href="#" data-filter=".illustration">Illustration</a>
                  <a href="#" data-filter=".packaging">Packaging</a>
                </div>
              </div> -->
            </div>



            <div id="posts" class="row gutter-isotope-item">
            @include('./test')
            </div>

          </div>


        </div>
      </div>


      <div class="unslate_co--section">
        <div class="container">
          <div class="owl-carousel logo-slider">
            <div class="logo-v1 gsap-reveal">
              <img src="images/la-vape-uno-logo.png" alt="Image" class="img-fluid">
            </div>
            <div class="logo-v1 gsap-reveal">
              <img src="images/shaping-futures-logo.png" alt="Image" class="img-fluid">
            </div>
            <div class="logo-v1 gsap-reveal">
              <img src="images/you-ptofiles-logo.png" alt="Image" class="img-fluid">
            </div>
            <div class="logo-v1 gsap-reveal">
              <img src="images/garence-logo.png" alt="Image" class="img-fluid">
            </div>
            <div class="logo-v1 gsap-reveal">
              <img src="images/xevo-logo.png" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>


      <div class="unslate_co--section" id="about-section">
        <div class="container">

          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">About Me</span></h2>
            <span class="gsap-reveal">
              <img src="images/divider.png" alt="divider" width="76">
            </span>
          </div>


          <div class="row mt-5 justify-content-between">
            <div class="col-lg-7 mb-5 mb-lg-0">
              <figure class="dotted-bg gsap-reveal-img ">
                <img src="images/abtme.png" alt="Image" class="img-fluid">
              </figure>
            </div>
            <div class="col-lg-4 pr-lg-5">
              <h3 class="mb-4 heading-h3"><span class="gsap-reveal">We can make it together</span></h3>
              <p class="lead gsap-reveal">As a Graphic Designer and Developer, I'm fueled to breathe life into
                innovative ideas, crafting visually
                captivating designs that resonate with your brand's essence. With an unwavering eye for detail and an
                insatiable curiosity for
                cutting-edge design trends, I seamlessly translate your vision into digital realities. <a class="unite-forces" style="color: #05FF00;" href="{{ route('welcome') }}#contact-section">Let's unite forces</a> and leave an indelible mark on the digital world.</p>
              <p class="mb-4 gsap-reveal">Uncover the power of creativity and embark on a journey that defies the
                boundaries of design.</p>
              <p class="gsap-reveal">
  <div class="btn-container">
    
    <a href="images/cv Aymane Portfolio_compressed.pdf" download="Resume Eloirdiwi Aymane.pdf" class="btn btn-outline-pill btn-custom-light"><video class="background-video" muted loop autoplay>
      <source src="/images/bttn-bg.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>Download my CV</a>
  </div>
</p>

            </div>
          </div>
        </div>
      </div>

      <div class="unslate_co--section" id="services-section">
        <div class="container">

          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">My Services</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
          </div>

          <div class="row gutter-v3">
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="0">
                <div class="wrap-icon mb-3">
                  <img src="images/svg/visual identity.svg" alt="Image" width="45">
                </div>
                <h3>Visual <br> Identity</h3>
                <p>Unlock the potential of your brand with an expert's design services, to make it truly exceptional.
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="100">
                <div class="wrap-icon mb-3">
                  <img src="images/svg/logo design.svg" alt="Icon" width="45">
                </div>
                <h3>Logo <br> Design</h3>
                <p>Crafting logos that are more than just visuals - they're your brand's identity in a single mark. </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
                <div class="wrap-icon mb-3">
                  <img src="images/svg/social management.svg" alt="Image" class="img-fluid" width="45">
                </div>
                <h3>Social <br> Management</h3>
                <p>Top notch social media posting <br>design strategy, to be always close <br> to your clients. </p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="0">
                <div class="wrap-icon mb-3">
                  <img src="images/svg/web development.svg" alt="Image" width="45">
                </div>
                <h3>Web <br> Development</h3>
                <p>Get a dynamic website that drive your digital success, and strengthen your online presence. </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="100">
                <div class="wrap-icon mb-3">
                  <img src="images/svg/ecommerce sulotion.svg" alt="Image" width="45">
                </div>
                <h3>eCommerce <br> Solutions</h3>
                <p>Elevate your online retail venture, for a seamless shopping experience and increased sales. </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
                <div class="wrap-icon mb-3">
                  <img src="images/svg/video production.svg" alt="Image" width="45">
                </div>
                <h3>Video <br> Production</h3>
                <p>Transform your vision into captivating Visuals, delivering messages to your audience. </p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="unslate_co--section section-counter" id="skills-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">My Skills</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
          </div>


          <div class="row pt-5">
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="100">0</span>
                  <span class="append-text">%</span>
                </span>
                <span class="counter-label">Design</span>
              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="80">0</span>
                  <span class="append-text">%</span>
                </span>
                <span class="counter-label">Programming</span>
              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="90">0</span>
                  <span class="append-text">%</span>
                </span>
                <span class="counter-label">Marketing</span>
              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="100">0</span>
                  <span class="append-text">%</span>
                </span>
                <span class="counter-label">Creativity</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END .counter -->

      <div class="unslate_co--section" id="testimonial-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">My Happy Clients</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
          </div>
        </div>

        <div class="owl-carousel testimonial-slider" data-aos="fade-up">
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <span class="quote">&ldquo;</span>
                <blockquote>
                  A sincere testimony for the professional work that you have always done for me in a quick and efficient manner.
                  <br> You have always been attentive, very proud to work with you all this time,<br> and I am sure that I will continue working with you.
                </blockquote>
              </div>

              <div class="testimonial-author-info">
                <div>
                  <img src="images/walid-hussein.png" alt="Image">
                </div>
                <h3>Walid Husseiin</h3>
                <span class="d-block position">Owner of @lapero.marrokii</span>
              </div>

            </div>
          </div>
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <span class="quote">&ldquo;</span>
                <blockquote>
                 Aymane, we couldn't be happier with the collaboration! Your design finesse not only brought our vision to life but <br>
                 also added an extra layer of brilliance. Your professional approach, coupled with<br>your boundless creativity and unwavering dedication, surpassed our expectations. 
                </blockquote>
              </div>

              <div class="testimonial-author-info">
                <img src="images/hassan-ghazi.jpeg" alt="Image">
                <h3>Hassan Ghazi</h3>
                <span class="d-block position">Owner of @Gharoom Amenagement</span>
              </div>

            </div>
          </div>
          <!--
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <span class="quote">&ldquo;</span>
                <blockquote>
                  Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                  the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                  language ocean. A small river named Duden flows by their place and supplies it with the necessary
                  regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                </blockquote>
              </div>

              <div class="testimonial-author-info">
                <img src="images/person_woman_1.jpg" alt="Image">
                <h3>Erica Miller</h3>
                <span class="d-block position">Product Designer @Twitter</span>
              </div>

            </div>
          </div> -->
        </div>

      </div>
      <!-- END testimonial -->

        @include('./posts') 
      <!-- END blog posts -->


      <div class="unslate_co--section" id="contact-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Get In Touch</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
          </div>


          <div class="row justify-content-between">
            <!-- contact form
            <div class="col-md-6">
              <form method="post" action="{{ route('send.email') }}" class="form-outline-style-v1" id="contactForm">
              @csrf
                <div class="form-group row mb-0">

                  <div class="col-lg-6 form-group gsap-reveal">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name" autocomplete="given-name">
                  </div>
                  <div class="col-lg-6 form-group gsap-reveal">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email" autocomplete="email">
                  </div>
                  <div class="col-lg-12 form-group gsap-reveal">
                    <label for="message">Write your message...</label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row gsap-reveal">
                  <div class="col-md-12 d-flex align-items-center">
                    <input type="submit" class="btn btn-outline-pill btn-custom-light mr-3" value="Send Message">
                    <span class="submitting"></span>
                  </div>
                </div>
              </form>
              <div id="form-message-warning" class="mt-4"></div>
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>

            </div>
            -->
            <div class="col-md-4">
              <div class="contact-info-v1">
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Email</span>
                  <a href="mailto:eloirdiwi@gmail.com" class="contact-info-val">eloirdiwi@gmail.com</a>
                </div>
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Phone</span>
                  <a href="tel:+212653859372" class="contact-info-val">+212 653 859 372</a>
                </div>
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Address</span>
                  <address class="contact-info-val">Mediouna Casablanca <br>29490</address>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div> <!-- END .unslate_co-site-inner -->




</div>
@endsection