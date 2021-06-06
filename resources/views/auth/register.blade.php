
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
								<p class="text-center">Already have an account? <a class="text-thm" href="page-register.html">Log In!</a></p>
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

							<div class="form-group custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="exampleCheck3">
								<label class="custom-control-label" for="exampleCheck3">Remember me</label>
								<a class="tdu btn-fpswd float-right" href="#">Forgot Password?</a>
							</div>
							<button type="submit" class="btn btn-log btn-block btn-thm2">Create Account</button>
							<div class="divide">
								<span class="lf_divider">Or</span>
								<hr>
							</div>
							<div class="row mt40">
								<div class="col-lg">
									<button type="submit" class="btn btn-block color-white bgc-fb mb0"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
								</div>
								<div class="col-lg">
									<button type="submit" class="btn btn2 btn-block color-white bgc-gogle mb0"><i class="fa fa-google float-left mt5"></i> Google</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection