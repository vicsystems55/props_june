<div class="dashboard_sidebar_menu dn-992">
	    <ul class="sidebar-menu">
	   		<li class="header" style="font-size: 17pt;"><img src="{{config('app.url')}}props_styles/images/header-logo2.png" alt="header-logo2.png" > Propsempire</li>
	   		<li class="title"><span>Main</span></li>
	    	<li class="treeview {{ (request()->is('agents/home')) ? 'active' : '' }}"><a class="" href="{{route('agents.home')}}"><i class="flaticon-layers "></i><span> Dashboard</span></a></li>
	      	<li class="treeview {{ (request()->is('agents/messages')) ? 'active' : '' }}"><a href="{{route('agents.messages')}}"><i class="flaticon-envelope"></i><span> Message</span></a></li>
	   		<li class="title"><span>Manage Listings</span></li>
	      	<li class="treeview {{ (request()->is( 'agents/my_listings', 
			  'agents/my_listings/create_listing', 
			  'agents/my_listings/published_listings', 
			  'agents/my_listings/unpublished_listings', 
			  'agents/my_listings/trashed_listings', 

			  'agents_mylistings/*'
			  
			  )) ? 'active' : '' }}">
		        <a href="#"><i class="flaticon-home"></i> <span>My Properties</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
		        	<li class="{{ (request()->is('agents/my_listings')) ? 'active' : '' }}"><a href="{{route('agents.my_listings')}}"><i class="fa fa-circle"></i> My Listings</a></li>
		        	<li class="{{ (request()->is('agents/my_listings/create_listing')) ? 'active' : '' }}"><a href="{{route('agents.create_listing')}}"><i class="fa fa-circle"></i> Create Listing</a></li>
					<li class="{{ (request()->is('agents/my_listings/published_listings')) ? 'active' : '' }}"><a href="{{route('agents.published_listings')}}"><i class="fa fa-circle"></i> Published Listing</a></li>
					<li class="{{ (request()->is('agents/my_listings/unpublished_listings')) ? 'active' : '' }}"><a href="{{route('agents.unpublished_listings')}}"><i class="fa fa-circle"></i> Unpublished Listing</a></li>
					<li class="{{ (request()->is('agents/my_listings/trashed_listings')) ? 'active' : '' }}"><a href="{{route('agents.trashed_listings')}}"><i class="fa fa-circle"></i> Trashed Listings</a></li>
		        	<!-- <li><a href="#"><i class="fa fa-circle"></i> Editors</a></li> -->
		        </ul>
	      	</li>
	      	<li class="treeview {{ (request()->is('agents/my_favourites')) ? 'active' : '' }}">
			  <a href="{{route('agents.my_favourites')}}"><i class="flaticon-heart"></i> <span> My Favorites</span></a></li>
	      	<!-- <li><a href="page-my-savesearch.html"><i class="flaticon-magnifying-glass"></i> <span>Saved Search</span></a></li> -->
	     	<li class="treeview {{ (request()->is('agents/my_reviews')) ? 'active' : '' }}">
		        <a href="{{route('agents.reviews')}}"><i class="flaticon-chat"></i><span> Reviews</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
		        	<li><a href="{{route('agents.my_reviews')}}"><i class="fa fa-circle"></i> My Reviews</a></li>
		        	<li><a href="{{route('agents.visitors_reviews')}}"><i class="fa fa-circle"></i> Visitor Reviews</a></li>
		        </ul>
	      	</li>
	   		<li class="title"><span>Manage Account</span></li>
		    <li >
				<a href="">
				<i class="flaticon-box"></i> <span>My Account</span></a>
				<ul class="treeview-menu">
		        	<li ><a href="{{route('agents.home')}}"><i class="fa fa-circle"></i> Subscription Plans</a></li>
		        	<li class="treeview {{ (request()->is('agents/my_plan')) ? 'active' : '' }}"><a href="{{route('agents.my_profile')}}"><i class="fa fa-circle"></i> My Plan</a></li>
		        </ul>
			</li>
		    <li class="treeview {{ (request()->is('agents/my_profile')) ? 'active' : '' }}">
			<a href="{{route('agents.my_profile')}}"><i class="flaticon-user"></i> <span>My Profile</span></a></li>
		    <li><a href=""><i class="flaticon-logout"></i> <span>Logout</span></a></li>
	    </ul>
    </div>