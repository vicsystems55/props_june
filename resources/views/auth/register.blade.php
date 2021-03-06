
@extends('layouts.props')


@section('content')
	<!-- Our LogIn Register -->
	<section class="our-log bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="login_form inner_page">
						@if ($errors->any())
							@foreach ($errors->all() as $error)
								<p class="alert alert-warning">{{$error}}</p>
							@endforeach
						@endif

						<form method="post" action="{{route('register')}}">

                        @csrf
							<div class="heading">
								<h3 class="text-center">Create a Propsempire account</h3>
								<p class="text-center">Already have a propsempire account? <a class="text-thm" href="{{route('login')}}">Log In!</a></p>
							</div>
                            <div class="form-group">
						    	<input type="name" class="form-control" name="name" id="exampleInputEmail3" placeholder="Fullname">
							</div>
							 <div class="form-group">
						    	<input type="email" class="form-control" name="email" id="exampleInputEmail3" placeholder="Email Address">
							</div>

						

							<div class="form-group">
						    	<input type="text" class="form-control" name="referral_code" id="exampleInputPassword4" placeholder="Referral Code (Optional)">
							</div>

                            <div class="form-group">
						    	<input type="password" class="form-control" name="password" id="exampleInputPassword4" placeholder="Confirm Password">
							</div>
                            <div class="form-group">
						    	<input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword4" placeholder="Confirm Password">
							</div>
							<div class="form-group">    
								
								<select name="role" id="" class="form-control">
                                    <option value="">Select Account Type</option>
                                    <option value="agent">Agent</option>
                                    <option value="agency">Agency</option>
                                    <option value="vendor">Vendor</option>
                                </select>
                            </div>

							
							<button type="submit" class="btn btn-log btn-block btn-thm2">Create Account</button>
							
						
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection