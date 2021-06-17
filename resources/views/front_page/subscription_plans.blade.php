@extends('layouts.props')


@section('content')



	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Subscription Plans</li>
						</ol>
						<h1 class="breadcrumb_title">Subscription Plans</h1>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Service Section Area -->
	<section class="our-service pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Choose Your Perfect Plan From Us</h2>
						<p>We provide full service at every step</p>
					</div>
				</div>
			</div>
			<div class="row">

                @for ($i = 0; $i < 12; $i++)

                <div class="col-sm-3 col-md-3 col-lg-3">
					<div class="pricing_table">
						<div class="pricing_header">
							<div class="price">$35,633</div>
							<h4>Standard Plan</h4>
						</div>
						<div class="pricing_content">
							<ul class="mb0">
								<li>50 Property Listings</li>
								<li>60 Days Availability</li>
								<li>20 Featured Property</li>
								<li>Limited Support</li>
							</ul>
						</div>
						<div class="pricing_footer">
							<a class="btn pricing_btn btn-block" href="#">Select Package</a>
						</div>
					</div>
				</div>

                    
                @endfor



                
			
			</div>
		</div>
	</section>




	@endsection
