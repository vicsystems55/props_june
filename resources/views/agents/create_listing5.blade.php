@extends('layouts.dashboard')

@section('content')
<div class="row">
    
    <div class="col-lg-12 mb10">
        <div class="breadcrumb_content style2">
            <h2 class="breadcrumb_title">Floor Plans</h2>
            <p class="h4">STAGE 5/5</p>
        
        </div>
    </div>
    <div class="col-lg-12">
        
       
        <div class="my_dashboard_review mt20">

            <h4>Upload Floor Plans if any</h4>
            <div class="row">
               
                {{-- <div class="col-xl-12">
                    <div class="my_profile_setting_input form-group">
                        <label for="planDsecription">Plan Description</label>
                        <input type="text" class="form-control" id="planDsecription">
                    </div>
                </div> --}}



                <plan-uploader-component appurl="{{config('app.url')}}"  ></plan-uploader-component>
                
                
               
             
               

               
                <div class="col-xl-12 mt-5">
                    <div class="my_profile_setting_input">
                        <a href="{{route('agents.create_listing4')}}" class="btn btn1 float-left">Back</a>

                        <form action="{{route('final_publish')}}" method="post">

                            @csrf

                            <button type="submit" class="btn btn2 float-right">Finish</button>
                        
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

