<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from grandetest.com/theme/findhouse-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 13:15:10 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced custom search, agency, agent, business, clean, corporate, directory, google maps, homes, idx agent, listing properties, membership packages, property, real broker, real estate, real estate agent, real estate agency, realtor">
<meta name="description" content="FindHouse - Real Estate HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="{{config('app.url')}}props_styles/css/bootstrap.min.css">
<link rel="stylesheet" href="{{config('app.url')}}props_styles/css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{config('app.url')}}props_styles/css/responsive.css">
<!-- Title -->
<title>PropsEmpire - Find Comfort</title>
<!-- Favicon -->
<link href="{{config('app.url')}}props_styles/images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{config('app.url')}}props_styles/images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div  class="wrapper">
	<div class="preloader"></div>

		@include('front_page.inc.header')

		@yield('content')

	<!-- Our Footer -->
	<section class="footer_one">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 pr0 pl0">
					<div class="footer_about_widget">
						<h4>About Site</h4>
						<p>We’re reimagining how you buy, sell and rent. It’s now easier to get into a place you love. So let’s do this, together.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_qlink_widget">
						<h4>Quick Links</h4>
						<ul class="list-unstyled">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Terms & Conditions</a></li>
							<li><a href="#">User’s Guide</a></li>
							<li><a href="#">Support Center</a></li>
							<li><a href="#">Press Info</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_contact_widget">
						<h4>Contact Us</h4>
						<ul class="list-unstyled">
							<li><a href="#"><span class="__cf_email__" data-cfemail="92fbfcf4fdd2f4fbfcf6fafde7e1f7bcf1fdff">[email&#160;protected]</span></a></li>
							<li><a href="#">Collins Street West, Victoria</a></li>
							<li><a href="#">8007, Australia.</a></li>
							<li><a href="#">+1 246-345-0699</a></li>
							<li><a href="#">+1 246-345-0695</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_social_widget">
						<h4>Follow us</h4>
						<ul class="mb30">
							<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
						</ul>
						<h4>Subscribe</h4>
						<form class="footer_mailchimp_form">
						 	<div class="form-row align-items-center">
							    <div class="col-auto">
							    	<input type="email" class="form-control mb-2" id="inlineFormInput" placeholder="Your email">
							    </div>
							    <div class="col-auto">
							    	<button type="submit" class="btn btn-primary mb-2"><i class="fa fa-angle-right"></i></button>
							    </div>
						  	</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer Bottom Area -->
	<section class="footer_middle_area pt40 pb40">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-xl-6">
					<div class="footer_menu_widget">
						<ul>
							<li class="list-inline-item"><a href="#">Home</a></li>
							<li class="list-inline-item"><a href="#">Listing</a></li>
							<li class="list-inline-item"><a href="#">Property</a></li>
							<li class="list-inline-item"><a href="#">Pages</a></li>
							<li class="list-inline-item"><a href="#">Blog</a></li>
							<li class="list-inline-item"><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-xl-6">
					<div class="copyright-widget text-right">
						<p>© 2020 Find House. Made with love.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>
<!-- Wrapper End -->
<script src="{{asset('js/app.js')}}"></script>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/popper.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/isotop.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/snackbar.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/simplebar.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/parallax.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/scrollto.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/jquery.counterup.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/wow.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/slider.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/timepicker.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/script.js"></script>
</body>

<!-- Mirrored from grandetest.com/theme/findhouse-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 13:15:14 GMT -->
</html>