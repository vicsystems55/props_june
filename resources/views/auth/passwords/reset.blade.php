@extends('layouts.props')


@section('content')

	<!-- Inner Page Breadcrumb -->
	<!-- <section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Logın</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Logın</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<!-- Our LogIn Register -->
	<section class="our-log bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="login_form inner_page">
						<form method="post" action="{{route('login')}}">

                        @csrf
							<div class="heading">
								<h3 class="text-center">Login to your account</h3>
								<p class="text-center">Don't have an account? <a class="text-thm" href="{{route('register')}}">Sign Up!</a></p>
							</div>
							 <div class="form-group">
						    	<input type="email" class="form-control" name="email" id="exampleInputEmail3" placeholder="Email Address">
							</div>
						
							<button type="submit" class="btn btn-danger btn-block p-2">Login</button>
					
			
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
