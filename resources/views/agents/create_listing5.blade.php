@extends('layouts.dashboard')

@section('content')
<div class="row">
    
    <div class="col-lg-12 mb10">
        <div class="breadcrumb_content style2">
            <h2 class="breadcrumb_title">Floor Plans</h2>
            <p class="h4">STAGE 5/5</p>
            <a class="badge badge-primary" href="{{route('agents.create_listing')}}">STAGE 1</a>
            <a class="badge badge-primary" href="{{route('agents.create_listing2')}}">STAGE 2</a>
            <a class="badge badge-primary" href="{{route('agents.create_listing3')}}">STAGE 3</a>
            <a class="badge badge-primary" href="{{route('agents.create_listing4')}}">STAGE 4</a>
            <a class="badge badge-primary" href="{{route('agents.create_listing5')}}">STAGE 5</a>
        </div>
    </div>
    <div class="col-lg-12">
        
       
     <uploader-component></uploader-component>
</div>

@endsection

