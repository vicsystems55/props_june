<div class="dashboard_sidebar_menu dn-992">
	    <ul class="sidebar-menu">
	   		<li class="header" style="font-size: 17pt;"><img src="{{config('app.url')}}props_styles/images/header-logo2.png" alt="header-logo2.png" > Propsempire</li>
	   		<li class="title"><span>Main</span></li>
	    	<li class="treeview {{ (request()->is('admin/home')) ? 'active' : '' }}"><a class="" href="{{route('admin.home')}}"><i class="flaticon-layers "></i><span> Dashboard</span></a></li>
	      	<li class="treeview {{ (request()->is('admin/members')) ? 'active' : '' }}"><a href="{{route('admin.members')}}"><i class="flaticon-envelope"></i><span> Members</span></a></li>
	   		<li class="title"><span>Manage Listings</span></li>
	      	<li class="treeview ">
		        <a href="#"><i class="flaticon-home"></i> <span>Properties</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
		        	<li class="{{ (request()->is('admin/my_listings')) ? 'active' : '' }}"><a href="{{route('admin.listings')}}"><i class="fa fa-circle"></i>Listings</a></li>

		        	<!-- <li><a href="#"><i class="fa fa-circle"></i> Editors</a></li> -->
		        </ul>
	      	</li>
	      
	   		
		  
	


			
	    </ul>
    </div>