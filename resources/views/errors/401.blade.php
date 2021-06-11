@extends('layouts.props')


@section('content')

<section class="our-error bgc-f7">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="error_page footer_apps_widget">
                    <img class="img-fluid" src="{{config('app.url')}}props_styles/images/resource/error.png" alt="error.png">
                    <div class="erro_code"><h1>Unauthorized</h1></div>
                    <p>We can’t seem to find the page you’re looking for</p>
                    <form class="form-inline mailchimp_form">
                        <label class="sr-only" for="inlineFormInputName">Name</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName" placeholder="Search">
                        <button type="submit" class="btn btn-primary mb-2"><span class="flaticon-magnifying-glass"></span></button>
                    </form>
                </div>
                <a class="btn btn_error btn-thm" href="index.html">Back To Home</a>
            </div>
        </div>
    </div>
</section>

@endsection