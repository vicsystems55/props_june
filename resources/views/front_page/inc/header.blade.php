	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one style2 navbar-scrolltofixed stricky main-menu">
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
		            <span>Propsempire</span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
		            <li>
		                <a href="{{route('home')}}"><span class="title">Home</span></a>
		                <!-- Level Two-->

		            </li>
		            <li>
		                <a href="{{route('search_results')}}"><span class="title">Listings</span></a>
		                <!-- Level Two-->

		            </li>


		            <li>
		                <a href="{{route('blog')}}"><span class="title">Blog</span></a>

		            </li>
		            <li class="last">
		                <a href="{{route('contact')}}"><span class="title">Contact</span></a>
		            </li>

	                	


						@auth()

						<li class="list-inline-item add_listing"><a href="{{route('agents.home')}}"><span class="dn-l"> My Account</span></a></li>

						<li class="list-inline-item "><a href="{{route('logout')}}"><span class="dn-lg"> Logout</span></a></li>

						@else

						<li class="list-inline-item list_s"><a href="{{route('login')}}" class="btn flaticon-user" > <span class="dn-lg">Login</span></a></li>


						@endauth

				</ul>
		    </nav>
		</div>
	</header>
	<!-- Modal -->


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
				<li><span>
                <a href="{{route('home')}}">
                Home
                </a>
                </span>

				</li>
				<li><span>
                <a href="{{route('search_results')}}">
                Listings
                </a>
                </span>

				</li>
				<li><span>
                <a href="{{route('contact')}}">
                Contact
                </a>
                </span>
	
				</li>
				<li><span>
                <a href="{{route('blog')}}">
                Blog
                </a>
                </span>
			
				</li>

				<li><a href="{{route('login')}}"><span class="flaticon-user"></span> Login</a></li>
				<li><a href="{{route('register')}}"><span class="flaticon-edit"></span> Register</a></li>

				@auth()
				<li class="cl_btn"><a class="btn btn-block btn-lg btn-thm circle" href="#"><span class="flaticon-plus"></span> Create Listing</a></li>

				@endauth
			
			</ul>
		</nav>
	</div>