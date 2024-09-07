// @prepros-append vendor/jquery-3.3.1.min.js
// @prepros-append vendor/popper.min.js
// @prepros-append vendor/bootstrap.min.js
// @prepros-append vendor/owl.carousel.min.js
// @prepros-append vendor/aos.js
// @prepros-append vendor/isotope.pkgd.min.js
// @prepros-append vendor/jquery.animateNumber.min.js
// @prepros-append vendor/jquery.waypoints.min.js
// @prepros-append vendor/TweenMax.min.js
// @prepros-append vendor/jquery.easing.1.3.js
// @prepros-append vendor/jarallax.min.js
// @prepros-append vendor/jarallax-video.min.js
// @prepros-append vendor/jquery.validate.min.js
// @prepros-append vendor/jquery.fancybox.min.js
// @prepros-append vendor/stickyfill.min.js
// @prepros-append vendor/imagesloaded.pkgd.min.js
// @prepros-append vendor/ScrollMagic.min.js
// @prepros-append vendor/scrollmagic.animation.gsap.min.js

// Get a reference to the logo image
const logo = document.querySelector('.header-logo');

// Listen for scroll events
window.addEventListener('scroll', function() {
  const header = document.querySelector('unslate_co--site-nav site-nav-target');
  
  // Check if the header has a specific class when it becomes white
  if (header.classList.contains('unslate_co--site-nav site-nav-target scrolled sleep')) {
    // Change the logo image source to the black logo
    logo.src = "{{ asset('images/logo-black.png') }}";
  } else {
    // Change back to the white logo when the header is not sticky
    logo.src = "{{ asset('images/logo-white.png') }}";
  }
});
