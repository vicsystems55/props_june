@extends('layouts.dashboard')

@section('content')
<div class="row">
    
   
    <div class="col-lg-12">
        
       
        <div class="my_dashboard_review mt20">

            <h4 class="text-center">You have successfully published this listing</h4>

            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_ya4ycrti.json"  background="transparent"  speed="1"  style="width: 400px; height: 400px; "  class="mx-auto text-center" loop  autoplay></lottie-player>
            <div class="mx-auto text-center">
                <a href="{{route('agents.my_listings')}}" class="btn btn-danger btn-lg text-center">View Listings</a>
            </div>
        </div>
    </div>
</div>

@endsection

