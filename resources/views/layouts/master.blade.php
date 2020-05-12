<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ouma Onyango & Associates</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->



	</head>
	<body>
		
	<div class="ftco-loader"></div>
	
	<div id="page">
	<nav class="ftco-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
		  <a href="{{url('/')}}"><img class="ftco-logo" src="{{asset('images/portfolio/logo.jpeg')}}" 
			alt="fixed" style=" height: 6em; width: 9em"></a>
					</div>
					<div class="col-md-10 text-right menu-1">
						<ul>
						<li class="active"><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{url('about-us')}}">About</a></li>
						<li><a href="{{url('practice-areas')}}">Practice Areas</a></li>
						<li><a href="{{url('case-studies')}}">Case studies</a></li>
						<li><a href="{{url('projects-gallery')}}">Gallery</a></li>
						<li><a href="{{url('contact-us')}}">Contact</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

  @yield('master')

	<footer id="ftco-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 ftco-widget">
					<h4><img src="images/portfolio/logo.jpeg" alt="Image" style=" height: 8em; width: 10em"></h4>
					<p>We have the best Advocates and Commissioners of Oaths.</p>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h4>Navigation</h4>
					<ul class="ftco-footer-links">
					<li><a href="{{url('/')}}">Home</a></li>
					<li><a href="{{url('practice-areas')}}">Our  Practice Areas</a></li>
					<li><a href="{{url('case-studies')}}">Special Case Scenerios</a></li>
					<li><a href="{{url('about-us')}}">About Ouma Onyango</a></li>
					<li><a href="{{url('contact-us')}}">Talk To Us Today</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Contact Information</h4>
					<ul class="ftco-footer-links">
						<p><span class="icon icon-map-marker"></span><span class="text">Ouma Onyango & Associates, <br>Kilimani Road Plaza,<br>P.O. Box 19203-00100,<br>Nairobi,Kenya.</span></p>
					<li>Call: <a href="{{url('tel://020240293')}}">020240293</a></>
						<li>Mail:<a href="{{url('mailto:oonassociates@gmail.com')}}">oonassociates@gmail.com</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Opening Hours</h4>
					<ul class="ftco-footer-links">
						<li>Mon - Fri: 8:00am - 2100hrs</li>
						<li>Sat 8:00 - 1200</li>
						<li>Sun 9:30 - 15: 00</li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script>| 
						<a href="{{url('http://mtaanitech-hub.co.ke')}}">
						Ouma Onyango & Associates</a> | All rights reserved.</p>
					<p>
						<ul class="ftco-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

	</body>
</html>

