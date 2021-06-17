@extends('layouts.dashboard')

@section('content')
<div class="row">
   
    <div class="col-lg-12 mb10">
        <div class="breadcrumb_content style2">
            <h2 class="breadcrumb_title">Location Details</h2>
            <p class="h4">STAGE 2/5</p>
            <a class="badge badge-primary" href="{{route('agents.create_listing')}}">STAGE 1</a>
            <a class="badge badge-primary" href="{{route('agents.create_listing2')}}">STAGE 2</a>
  
        </div>
    </div>
    <div class="col-lg-12">
       
        <div class="my_dashboard_review mt30">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="mb30"></h4>
                    <div class="my_profile_setting_input form-group">
                        <label for="propertyAddress">Address</label>
                        <input type="text" class="form-control" id="propertyAddress">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="my_profile_setting_input form-group">
                        <label for="propertyState">County / State</label>
                        <input type="text" class="form-control" id="propertyState">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="my_profile_setting_input form-group">
                        <label for="propertyCity">City</label>
                        <input type="text" class="form-control" id="propertyCity">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="neighborHood">Neighborhood</label>
                        <input type="text" class="form-control" id="neighborHood">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="zipCode">Zip</label>
                        <input type="text" class="form-control" id="zipCode">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                        <label>Country</label>
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                            <option data-tokens="Turkey">Turkey</option>
                            <option data-tokens="Iran">Iran</option>
                            <option data-tokens="Iraq">Iraq</option>
                            <option data-tokens="Spain">Spain</option>
                            <option data-tokens="Greece">Greece</option>
                            <option data-tokens="Portugal">Portugal</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="my_profile_setting_input form-group">
                        <div class="h400 bdrs8" id="map-canvas"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="googleMapLat">Latitude (for Google Maps)</label>
                        <input type="text" class="form-control" id="googleMapLat">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="googleMapLong">Longitude (for Google Maps)</label>
                        <input type="text" class="form-control" id="googleMapLong">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                        <label>Google Map Street View</label>
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                            <option data-tokens="Turkey">Street View v1</option>
                            <option data-tokens="Iran">Street View v2</option>
                            <option data-tokens="Iraq">Street View v3</option>
                            <option data-tokens="Spain">Street View v4</option>
                            <option data-tokens="Greece">Street View v5</option>
                            <option data-tokens="Portugal">Street View v6</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="my_profile_setting_input">
                        <a href="{{route('agents.create_listing')}}" class="btn btn1 float-left">Back</a>
                        <a href="{{route('agents.create_listing3')}}" class="btn btn2 float-right">Next</a>
                    </div>
                </div>
            </div>
        </div>
      
      
    </div>
</div>

@endsection

