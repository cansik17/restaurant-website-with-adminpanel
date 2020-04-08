<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>@yield('title', 'YamiFood')</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="front/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="front/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="front/css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="front/css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="front/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="front/css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href={{ route('home') }}>
					<img src="front/images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href={{ route('home') }}>Home</a></li>
						<li class="nav-item {{ Request::is('menu') ? 'active' : '' }}"><a class="nav-link" href={{ route('menu') }}>Menu</a></li>
						<li class="nav-item {{ Request::is('about') ? 'active' : '' }}"><a class="nav-link" href={{ route('about') }}>About</a></li>
						<li class="nav-item {{ Request::is('gallery') ? 'active' : '' }}"><a class="nav-link" href={{ route('gallery') }}>Gallery</a></li>
						<li class="nav-item {{ Request::is('contact') ? 'active' : '' }}"><a class="nav-link" href={{ route('contact') }}>Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
    <!-- End header -->
    
    

        @yield('content')
        
        	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>{{$settings->about}}</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>{{$settings->mon}}</p>
					<p><span class="text-color">Tuesday :</span>{{$settings->thu}}</p>
					<p><span class="text-color">Wednesday :</span>{{$settings->wed}}</p>
					<p><span class="text-color">Thursday :</span>{{$settings->thu}}</p>
					<p><span class="text-color">Friday :</span>{{$settings->fri}}</p>
					<p><span class="text-color">Saturday :</span>{{$settings->sat}}</p>
					<p><span class="text-color">Sunday :</span>{{$settings->sun}}</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">{{$settings->address}}</p>
					<p class="lead"><a href="#">{{$settings->phone}}</a></p>
					<p><a href="#">{{$settings->email}}</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
				
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="{{$settings->facebook}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="{{$settings->twitter}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="{{$settings->linkedin}}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="{{$settings->google}}" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="{{$settings->instagram}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; {{date('Y')}} <a href="{{route('home')}}">Yamifood Restaurant</a> Design By : 
					<a href="https://html.design/">html design</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="front/js/jquery-3.2.1.min.js"></script>
	<script src="front/js/popper.min.js"></script>
	<script src="front/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="front/js/jquery.superslides.min.js"></script>
	<script src="front/js/images-loded.min.js"></script>
	<script src="front/js/isotope.min.js"></script>
	<script src="front/js/baguetteBox.min.js"></script>
	<script src="front/js/form-validator.min.js"></script>
    <script src="front/js/contact-form-script.js"></script>
	<script src="front/js/custom.js"></script>

</body>
</html>
