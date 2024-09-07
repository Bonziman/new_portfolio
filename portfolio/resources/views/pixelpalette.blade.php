

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>PixelPalette | Pixel Art Edito</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap App Landing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Small Apps Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="js/ppplugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="js/ppplugins/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="js/ppplugins/slick/slick.css">
  <link rel="stylesheet" href="js/ppplugins/slick/slick-theme.css">
  <link rel="stylesheet" href="js/ppplugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="js/ppplugins/aos/aos.css">
  

  <!-- CUSTOM CSS -->
  
  <link rel="stylesheet" href="{{asset('css/ppstyle.css')}}">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
  <div class="container">
    <a class="navbar-brand" href="index.html"><h2 style="color: white;">PixelPallete</h2></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Home
          </a>
          <!-- Dropdown list -->
          <ul class="dropdown-menu">
            

            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ route('pixelpalette') }}#features-section">Features
            
          </a>
          
        </li>
        <li class="nav-item @@about">
          <a class="nav-link" href="{{ route('pixelpalette') }}#about-section">About</a>
        </li>
        <li class="nav-item @@contact">
          <a class="nav-link" href="{{ route('welcome') }}#contact-section">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--====================================
=            Hero Section            =
=====================================-->
<section class="section gradient-banner">
	<div class="shapes-container">
		
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<h1 class="text-white font-weight-bold mb-4">Create, Save, and Edit Pixel Art with Ease</h1>
				<p class="text-white mb-5" style="color: black;">PixelArt Editor is a powerful and user-friendly tool for creating beautiful pixel art.
					Whether you're a hobbyist or a professional, our editor provides all the features you need to bring your pixel art to life.</p>
				<a href="FAQ.html" class="btn btn-main-md"><strong>Try Now</strong> </a>
			</div>
			<!-- <div class="col-md-6 text-center order-1 order-md-2">
				<img class="img-fluid" src="images/mobile.png" alt="screenshot">
			</div> -->
		</div>
	</div>
</section>
<!--====  End of Hero Section  ====-->

<section class="section pt-0 position-relative pull-top" id="features-section">
	<div class="container" style="margin-top: 80px; max-width: 1240px;">
		<div class="rounded shadow p-5 bg-white">
			<div class="row">
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<img class="feature-image" src="images/ppimages/feature/Versatile-Drawing-Tools.png" alt="PixelPalette's Versatile Drawing Tools">
					<h3 class="mt-4 text-capitalize h5 ">Versatile Drawing Tools</h3>
					<p class="regular text-muted">The PixelArt Editor offers a range of drawing tools including brush, 
						rectangle, and circle tools, with adjustable sizes for detailed and precise pixel art creation.</p>
				</div>
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<img class="feature-image" src="images/ppimages/feature/Enhanced Color Picker.jpg" alt="PixelPalette's Enhanced Color Picker">
					<h3 class="mt-4 text-capitalize h5 ">Enhanced Color Picker</h3>
					<p class="regular text-muted">Select from a wide range of colors to create vibrant and unique pixel art. 
						The color picker ensures flexibility and accuracy in choosing the perfect shades.</p>
				</div>
				<div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
					<img class="feature-image" src="images/ppimages/feature/Save And Gallery Management.jpg" alt="PixelPalette's Enhanced Color Picker">
					<h3 class="mt-4 text-capitalize h5 ">Save and Gallery Management</h3>
					<p class="regular text-muted">Save your artwork and manage your gallery with ease. View, organize, 
						and delete your pixel art directly within the application to keep track of your creative progress.</p>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!--==================================
=            Feature Grid            =
===================================-->
<section class="feature section pt-0" id="about-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 ml-auto justify-content-center">
				<!-- Feature Mockup -->
				<div class="image-content" data-aos="fade-right">
					<img class="img-fluid ufo" src="images/ppimages/about/ufo.webp" alt="ufo">
				</div>
			</div>
			<div class="col-lg-6 mr-auto align-self-center">
				<div class="feature-content">
					<!-- Feature Title -->
					<h2>About <span class="pixel-text">PixelPalette</span></h2>
					<script>
						document.addEventListener('DOMContentLoaded', function () {
							const pixelText = document.querySelector('.pixel-text');
							const text = pixelText.textContent;
							pixelText.innerHTML = '';
							text.split('').forEach((letter, index) => {
								const span = document.createElement('span');
								span.textContent = letter;
								span.style.animationDelay = `${index * 0.2}s`; // Adjust the delay as needed
								pixelText.appendChild(span);
							});
						});
					</script>
					<!-- Feature Description -->
					<p class="desc">The PixelPalette project was inspired by a need for a more intuitive and efficient 
						way to create pixel art. During my work as a graphic designer, I realized the limitations of existing 
						tools and envisioned a solution that could streamline the pixel art creation process. 
						This project is part of my portfolio for <a href="www.holbertonschool.com"><strong>Holberton School</strong></a>, 
						showcasing my skills and dedication to innovative solutions in digital art.</p>
						<h4>Visit Aymane's profiles</h4>
						<div class="social-buttons">
							<a href="https://github.com/Bonziman" target="_blank" class="social-button github">
							  <svg class="cf-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="-2.5 0 19 19"><path d="M9.464 17.178a4.506 4.506 0 0 1-2.013.317 4.29 4.29 0 0 1-2.007-.317.746.746 0 0 1-.277-.587c0-.22-.008-.798-.012-1.567-2.564.557-3.105-1.236-3.105-1.236a2.44 2.44 0 0 0-1.024-1.348c-.836-.572.063-.56.063-.56a1.937 1.937 0 0 1 1.412.95 1.962 1.962 0 0 0 2.682.765 1.971 1.971 0 0 1 .586-1.233c-2.046-.232-4.198-1.023-4.198-4.554a3.566 3.566 0 0 1 .948-2.474 3.313 3.313 0 0 1 .091-2.438s.773-.248 2.534.945a8.727 8.727 0 0 1 4.615 0c1.76-1.193 2.532-.945 2.532-.945a3.31 3.31 0 0 1 .092 2.438 3.562 3.562 0 0 1 .947 2.474c0 3.54-2.155 4.32-4.208 4.548a2.195 2.195 0 0 1 .625 1.706c0 1.232-.011 2.227-.011 2.529a.694.694 0 0 1-.272.587z"></path></svg>
								</a>
								<a href="https://x.com/AEloirdiwi" target="_blank" class="social-button linkedin">
									<svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
										<path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
									  </svg>
							</a>
							<a href="https://www.linkedin.com/in/aymane-el-oirdiwi-b214ab210/" target="_blank" class="social-button facebook">
								<svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
									<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
								  </svg>
							</a>
							<br>
							
							
						  </div>
						  <button class="gthb-button"> 
							<svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <title>github</title> <rect fill="none" height="24" width="24"></rect> <path d="M12,2A10,10,0,0,0,8.84,21.5c.5.08.66-.23.66-.5V19.31C6.73,19.91,6.14,18,6.14,18A2.69,2.69,0,0,0,5,16.5c-.91-.62.07-.6.07-.6a2.1,2.1,0,0,1,1.53,1,2.15,2.15,0,0,0,2.91.83,2.16,2.16,0,0,1,.63-1.34C8,16.17,5.62,15.31,5.62,11.5a3.87,3.87,0,0,1,1-2.71,3.58,3.58,0,0,1,.1-2.64s.84-.27,2.75,1a9.63,9.63,0,0,1,5,0c1.91-1.29,2.75-1,2.75-1a3.58,3.58,0,0,1,.1,2.64,3.87,3.87,0,0,1,1,2.71c0,3.82-2.34,4.66-4.57,4.91a2.39,2.39,0,0,1,.69,1.85V21c0,.27.16.59.67.5A10,10,0,0,0,12,2Z"></path> </g></svg>
							Github Repository 
							</button>
				</div>
				<!-- Testimonial Quote -->
				<!-- <div class="testimonial">
					<p>
						"InVision is a window into everything that's being designed at Twitter. It gets all of our best work in one
						place."
					</p>
					<ul class="list-inline meta">
						<li class="list-inline-item">
							<img src="images/testimonial/feature-testimonial-thumb.jpg" alt="">
						</li>
						<li class="list-inline-item">Jonathon Andrew , Themefisher.com</li>
					</ul>
				</div> -->
			</div>
		</div>
	</div>
</section>


<!--====  End of Feature Grid  ====-->

<!--==============================
=            Services            =
===============================-->
<!--====  End of Services  ====-->


<!--=================================
=            Video Promo            =
==================================-->
<section class="video-promo section bg-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="content-block">
					<!-- Heading -->
					<h2>Watch Our Promo Video</h2>
					<!-- Promotional Speech -->
					<p>Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat, accumsan id imperdiet et,
						porttitor at sem. Vivamus </p>
					<!-- Popup Video -->
					<a data-fancybox href="https://youtu.be/v-zTNPRv8d4">
						<i class="ti-control-play video"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Video Promo  ====-->

<!--=================================
=            Testimonial            =
==================================-->

<!--====  End of Testimonial  ====-->



<!--============================
=            Footer            =
=============================-->



  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
  

  <script src="{{asset('js/ppplugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('js/ppplugins/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/ppplugins/slick/slick.min.js')}}"></script>
  <script src="{{asset('js/ppplugins/fancybox/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('js/ppplugins/syotimer/jquery.syotimer.min.js')}}"></script>
  <script src="{{asset('js/ppplugins/aos/aos.js')}}"></script>

  <!-- google map -->
  
  
  
  <script src="{{asset('js/ppscript.js')}}"></script>
</body>

</html>
