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
					<div class="login_form inner_page pt-5 pb-5">
                        <div class="heading">
                            <h3 class="text-center">Reset password</h3>
                        </div>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                               </div>
                        @endif         {{ session('status') }}
                
						<form method="post" action="{{ route('password.email') }}">

                        @csrf
						
							 <div class="form-group">
						    	<input type="email" class="form-control" name="email" id="exampleInputEmail3" placeholder="Email Address">
							</div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

							<button type="submit" class="btn btn-danger btn-block p-2">Send password reset link</button>
					
			
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
