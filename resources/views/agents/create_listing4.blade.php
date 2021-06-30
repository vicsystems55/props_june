@extends('layouts.dashboard')

@section('content')
<div class="row">
    
    <div class="col-lg-12 mb10">
        <div class="breadcrumb_content style2">
            <h2 class="breadcrumb_title">Property media</h2>
            <p class="h4">STAGE 4/5</p>
            <a class="badge badge-primary" href="{{route('agents.create_listing')}}">STAGE 1</a>
            <a class="badge badge-primary" href="{{route('agents.create_listing2')}}">STAGE 2</a>
            <a class="badge badge-primary" href="{{route('agents.create_listing3')}}">STAGE 3</a>
            <a class="badge badge-primary" href="{{route('agents.create_listing4')}}">STAGE 4</a>
           
        </div>
    </div>
    <div class="col-lg-12">
        
        <div class="my_dashboard_review mt30">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="mb30"></h4>
                </div>

                <uploader-component></uploader-component>
                
                

                <div class="col-xl-12">
                    <div class="my_profile_setting_input">
                        <a href="{{route('agents.create_listing4')}}" class="btn btn1 float-left">Back</a>
                        <a href="{{route('agents.create_listing5')}}" class="btn btn2 float-right">Next</a>
                    </div>
                </div>


            </div>

           
        </div>
       
    </div>
</div>

@endsection

