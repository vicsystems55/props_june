<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from grandetest.com/theme/findhouse-html/page-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 13:15:53 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor">
<meta name="description" content="PropsEmpire - Find comfort">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="{{config('app.url')}}props_styles/css/bootstrap.min.css">
<link rel="stylesheet" href="{{config('app.url')}}props_styles/css/style.css">
<link rel="stylesheet" href="{{config('app.url')}}props_styles/css/dashbord_navitaion.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{config('app.url')}}props_styles/css/responsive.css">
<!-- Title -->
<title>PropsEmpire- Find Comfort</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="app" class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one style2 menu-fixed main-menu">
		<div class="container-fluid p0">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="{{config('app.url')}}props_styles/images/header-logo.png" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="#" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="{{config('app.url')}}props_styles/images/header-logo2.png" alt="header-logo.png">
		            <img class="logo2 img-fluid" src="{{config('app.url')}}props_styles/images/header-logo2.png" alt="header-logo2.png">
		            <span>FindHouse</span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
		            <li>
		                <a href="{{route('home')}}"><span class="title">Home</span></a>
		                <!-- Level Two-->
		
		            </li>
		            <li>
		                <a href="#"><span class="title">Listings</span></a>
		                <!-- Level Two-->
	              
		            </li>

		            <li>
		                <a href="#"><span class="title">Blog</span></a>

		            </li>
		            <li class="last">
		                <a href="page-contact.html"><span class="title">Contact</span></a>
		            </li>
					<li class="list-inline-item add_listing"><a href="{{route('agents.create_listing')}}"><span class="flaticon-plus"></span><span class="dn-lg"> Create Listing</span></a></li>

	                <li class="user_setting">
						<div class="dropdown">
	                		<a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src="{{config('app.url')}}props_styles/images/team/e1.png" alt="e1.png"> <span class="dn-1199">{{Auth::user()->name}}</span></a>
						    <div class="dropdown-menu">
						    	
						    	<div class="user_setting_content">
									<a class="dropdown-item active" href="#">My Profile</a>
									<a class="dropdown-item" href="#">Messages</a>
								
									<a class="dropdown-item" href="{{route('logout')}}">Log out</a>
						    	</div>
						    </div>
						</div>
			        </li>
		        </ul>
		    </nav>
		</div>
	</header>

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-center">
		            <img class="nav_logo_img img-fluid mt20" src="{{config('app.url')}}props_styles/images/header-logo2.png" alt="header-logo2.png">
		            <span class="mt20">PropsEmpire</span>
				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href="{{route('agents.home')}}"><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li><span>Home</span>

				</li>
				<li><span>Listings</span>

				</li>

				<li><span>Blog</span>
				</li>
				
			
				<li class="cl_btn"><a class="btn btn-block btn-lg btn-thm circle" href="#"><span class="flaticon-plus"></span> Create Listing</a></li>
			</ul>
		</nav>
	</div>

@include('inc.agent_sidebar')

	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="col-lg-9 col-xl-10 maxw100flex-992">
					<div class="row">

						<div class="col-lg-12">
							<div class="dashboard_navigationbar dn db-992">
								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
											@if(Auth::user()->role == 'agent')

											<ul id="myDropdown" class="dropdown-content">
												<li class="{{ (request()->is('agents/home')) ? 'active' : '' }}"><a href="{{route('agents.home')}}"><span class="flaticon-layers"></span> Dashboard</a></li>
												<li class="{{ (request()->is('agents/my_listings/create_listing')) ? 'active' : '' }}"><a href="{{route('agents.create_listing')}}"><span class="flaticon-filter-results-button"></span> Add New Listing</a></li>
												<li class="{{ (request()->is('agents/messages')) ? 'active' : '' }}"><a href="{{route('agents.messages')}}"><span class="flaticon-envelope"></span> Message</a></li>
												<li class="{{ (request()->is('agents/my_listings')) ? 'active' : '' }}"><a href="{{route('agents.my_listings')}}"><span class="flaticon-home"></span> My Properties</a></li>
												<li class="{{ (request()->is('agents/my_favourites')) ? 'active' : '' }}"><a href="{{route('agents.my_favourites')}}"><span class="flaticon-heart"></span> My Favorites</a></li>
												<li class="{{ (request()->is('agents/my_listings/published_listings')) ? 'active' : '' }}"><a href="{{route('agents.published_listings')}}"><span class="flaticon-magnifying-glass"></span> Saved Search</a></li>
												<li class="{{ (request()->is('agents/my_listings/unpublished_listings')) ? 'active' : '' }}"><a href="{{route('agents.unpublished_listings')}}"><span class="flaticon-chat"></span> My Reviews</a></li>
												<li class="{{ (request()->is('agents/my_plan')) ? 'active' : '' }}"><a href="{{route('agents.my_plan')}}"><span class="flaticon-box"></span> My Package</a></li>
												<li class="{{ (request()->is('agents/my_profile')) ? 'active' : '' }}"><a href="{{route('agents.my_profile')}}"><span class="flaticon-user"></span> My Profile</a></li>
												
												<li class="{{ (request()->is('agents/home')) ? 'active' : '' }}"><a href="page-login.html"><span class="flaticon-logout"></span> Logout</a></li>
											</ul>

											@else


											@endif
								</div>
							</div>
						</div>


                        <div class="col-lg-12">
                        
                        
                        @yield('content')



                        </div>
                        
                        
                        
                        
           



					</div>


					<div class="row mt50">
						<div class="col-lg-6 offset-lg-3">
							<div class="copyright-widget text-center">
								<p>© 2021 Propsempire.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>
<script src="{{asset('js/app.js')}}"></script>
<!-- Wrapper End -->

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{config('app.url')}}props_styles/js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/popper.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/chart.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/chart-custome.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/snackbar.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/simplebar.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/parallax.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/scrollto.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/jquery.counterup.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/wow.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/progressbar.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/slider.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/timepicker.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/wow.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}props_styles/js/dashboard-script.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="{{config('app.url')}}/props_styles/js/script.js"></script>



</body>

<!-- Mirrored from grandetest.com/theme/findhouse-html/page-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 13:15:53 GMT -->
</html>