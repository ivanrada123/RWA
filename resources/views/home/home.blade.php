<!DOCTYPE HTML>
<html>
	<head>
		<title>Servis mobitela FSRE</title>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">		
		<link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/magnific-popup.css">

		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	</head>

	<body>
		<!-- Wrapper -->
		<section class="head" id="header">
			<div class="wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<header class="header">
								<div class="inner">
									<!-- Logo -->
									<a href="#menu"class="nav-bars">
										<img src="images/nav_icon.svg" class="img-responsive" alt="Collapsable Navbar">
									</a>
									<a href="index.html" class="logo">
										<span class="symbol"><img src="images/logo.png" alt="Title" />
									</span><span class="title">Dobrodošli</span>
									</a>
									
									@if (Auth::guest())
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
@else
    <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
@endif
								</div>
							</header>
							<!-- Menu -->
							<nav id="menu">
								<h2>Menu</h2>
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="{{url('servis')}}">Servis</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Main -->

		<section class="main-body">
			<div class="container">
				<div class="row ">
					<div class="col-md-9">
						<p class="drescription">RWA projekt by Ivan & Katja</p>
					</div>
				</div>
				<div class="tiles">
					<div class="row">
						<div class="col-md-6">
							<div class="a">
								<a href="{{ url('apple') }}" >
									<img src="images/1.jpg" class="img-responsive" alt="Responsive image">
									<div class="img-hover glass">
										<div class="c-table">
											<div class="ct-cell">
												<h3 class="img-title">Apple</h3>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div id="test-popup-1" class="white-popup mfp-hide">
							  	<div class="container-fluid">
									<div class="row">
										<div class="pop-up-color">
											<div class="col-md-8 p-l-0 p-r-0">
												<img src="images/1.jpg" class="img-responsive" alt="Responsive image">
											</div>
											<div class="col-md-4">
												<div>
													<h2 class="popup-head">Apple</h2>
												</div>
												<div>
													<p class="popup-parapraph">Odaberite model Vašeg uređaja</p>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="a">
								<a href="{{ url('samsung') }}" >
									<img src="images/2.jpg" class="img-responsive" alt="Responsive image">
									 <div class="img-hover shoes-glass">
										<div class="c-table">
											<div class="ct-cell">
												<h3 class="img-title">Samsung</h3>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div id="test-popup-2" class="white-popup mfp-hide">
							  	<div class="container-fluid">
									<div class="row">
										<div class="pop-up-color">
											<div class="col-md-8 p-l-0 p-r-0">
												<img src="images/2.jpg" class="img-responsive" alt="Responsive image">
											</div>
											<div class="col-md-4">
												<div>
													<h2 class="popup-head">Samsung</h2>
												</div>
												<div>
													<p class="popup-parapraph">Odaberite model Vašeg uređaja</p>
												</div>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><br>
					<div class="row">
						<div class="col-md-4">
							<div class="a">
								<a href="{{ url('xiaomi') }}">
									<img src="images/3.jpg" class="img-responsive" alt="Responsive image">
									<div class="img-hover hand-parts">
										<div class="c-table">
											<div class="ct-cell">
												<h3 class="img-title">Xiaomi</h3>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div id="test-popup-3" class="white-popup mfp-hide">
							  	<div class="container-fluid">
									<div class="row">
										<div class="pop-up-color">
											<div class="col-md-8 p-l-0 p-r-0">
												<img src="images/3.jpg" class="img-responsive" alt="Responsive image">
											</div>
											<div class="col-md-4">
												<div>
													<h2 class="popup-head">Xiaomi</h2>
												</div>
												<div>
													<p class="popup-parapraph">Odaberite model Vašeg uređaja</p>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="a">
								<a href="{{ url('huawei') }}">
									<img src="images/4.jpg" class="img-responsive" alt="Responsive image">
									<div class="img-hover table-with-phone">
										<div class="c-table">
											<div class="ct-cell">
												<h3 class="img-title">Huawei</h3>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div id="test-popup-4" class="white-popup mfp-hide">
							  	<div class="container-fluid">
									<div class="row">
										<div class="pop-up-color">
											<div class="col-md-8 p-l-0 p-r-0">
												<img src="images/4.jpg" class="img-responsive" alt="Responsive image">
											</div>
											<div class="col-md-4">
												<div>
													<h2 class="popup-head">Huawei</h2>
												</div>
												<div>
													<p class="popup-parapraph">Odaberite model Vašeg uređaja</p>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="a">
								<a href="{{ url('google') }}" >
									<img src="images/5.jpg" class="img-responsive" alt="Responsive image">
									 <div class="img-hover orange-shoe"> 
										<div class="c-table">
											<div class="ct-cell">
												<h3 class="img-title">Google</h3>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div id="test-popup-5" class="white-popup mfp-hide">
							  	<div class="container-fluid">
									<div class="row">
										<div class="pop-up-color">
											<div class="col-md-8 p-l-0 p-r-0">
												<img src="images/5.jpg" class="img-responsive" alt="Responsive image">
											</div>
											<div class="col-md-4">
												<div>
													<h2 class="popup-head">Google</h2>
												</div>
												<div>
													<p class="popup-parapraph">Odaberite model Vašeg uređaja</p>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><br>
					
						<!-- <div class="col-md-4">
							<div class="a">
								<a href="#test-popup-7" class="open-popup-link">
									<img src="images/7.jpg" class="img-responsive" alt="Responsive image">
									<div class="img-hover girls-tops">
										<div class="c-table">
											<div class="ct-cell">
												<h3 class="img-title">Ostali proizvođači</h3>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div id="test-popup-7" class="white-popup mfp-hide">
							  	<div class="container-fluid">
									<div class="row">
										<div class="pop-up-color">
											<div class="col-md-8 p-l-0 p-r-0">
												<img src="images/7.jpg" class="img-responsive" alt="Responsive image">
											</div>
											<div class="col-md-4">
												<div>
													<h2 class="popup-head">Pošaljite zahtjev za servis</h2>
												</div>
												<div>
													<p class="popup-parapraph">Ako imate neki od ostalih modela uređaja pošaljite zahtjev za servis</p>
												</div>
												<div class="pop-up-icon">
													<div class="row">
														<ul class="text-center popup-social-contact">
															<li class="popup-social-icons">
															<a href="#" class="icon pop-up fa-facebook"><span class="label">Facebook</span></a>
															</li>
															<li class="popup-social-icons">
																<a href="#" class="icon pop-up fa-twitter"><span class="label">Twitter</span></a>
															</li>
															<li class="popup-social-icons">
																<a href="#" class="icon pop-up fa-google-plus"><span class="label">GooglePlus</span></a>
															</li>
															<li class="popup-social-icons">
																<a href="#" class="icon pop-up fa-pinterest"><span class="label">pinterest</span></a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</section>
		
		<section class="social-contact-icon">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<ul class="text-center social-contact">
							<li class="social-icons">
							<a href="{{ url('https://www.facebook.com/nimbusrepair') }}" class="icon style2 fa-facebook"><span class="label">Facebook</span></a>
							</li>
							<li class="social-icons">
								<a href="{{ url('https://twitter.com/ivanrada123') }}" class="icon style2 fa-twitter"><span class="label">Twitter</span></a>
							</li>
							
							<li class="social-icons">
								<a href="{{ url('https://www.instagram.com/ivan_repair_/') }}" class="icon style2 fa-instagram"><span class="label">Instagram</span></a>
							</li>
							<!-- <li class="social-icons">
								<a href="#" class="icon style2 fa-reddit-alien"><span class="label">reddit-alien</span></a>
							</li>-->
							
							<li class="social-icons">
								<a href="{{ url('https://www.linkedin.com/in/ivan-radojevi%C4%87-a8b519258/') }}" class="icon style2 fa-linkedin"><span class="label">Linkedin</span></a>
							</li>
						</ul>							
					</div>
				</div>
			</div>
		</section>

		<section class="footer">		
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-xs-9">
							<p class="right-color">&copy; Copyright 2023. All rights reserved to Ivan & Katja.</a></p>
						</div>
						<div class="col-sm-4 col-xs-3" align="right">
							<a href="#" id="back-to-top" class="top text-right" >TOP <i class="fa fa-angle-up" aria-hidden="true"></i> </a>
						</div>
					</div>
				</div>											
			</footer>
		</section>

	<!-- Scripts -->

		<script src="assets/js/jquery-3.1.0.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.magnific-popup.min.js"></script>

		<script src="assets/js/script.js"></script>

		<!--  ===== Scroll to Top ====  -->
	    <script>
			if ($('#back-to-top').length) {
			    $('#back-to-top').on('click', function (e) {
			        e.preventDefault();
			        $('html,body').animate({
			            scrollTop: 0
			        }, 700);
			    });
			}
		</script>
		
	</body>
</html>