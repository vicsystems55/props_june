
@extends('layouts.props')


@section('content')
	<!-- Our LogIn Register -->
	<section class="our-log bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="login_form inner_page">
						<form method="post" action="{{route('login')}}">

                        @csrf
							<div class="heading">
								<h3 class="text-center">Create an Account</h3>
								<p class="text-center">Already have an account? <a class="text-thm" href="{{route('login')}}">Log In!</a></p>
							</div>
                            <div class="form-group">
						    	<input type="email" class="form-control" name="email" id="exampleInputEmail3" placeholder="Fullname">
							</div>
							 <div class="form-group">
						    	<input type="email" class="form-control" name="email" id="exampleInputEmail3" placeholder="Email Address">
							</div>
							<div class="form-group">
						    	<input type="password" class="form-control" name="password" id="exampleInputPassword4" placeholder="Password">
							</div>

                            <div class="form-group">
						    	<input type="password" class="form-control" name="password" id="exampleInputPassword4" placeholder="Confirm Password">
							</div>
                            <div class="form-group">
						    	<input type="password" class="form-control" name="password" id="exampleInputPassword4" placeholder="Confirm Password">
                                <select name="" id="" class="form-control">
                                    <option value="">Select Account Type</option>
                                    <option value="">Agent</option>
                                    <option value="">Agency</option>
                                    <option value="">Vendor</option>
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