@extends('layouts.dashboard')

@section('content')
<div class="row">
   
    <div class="col-lg-12 mb10">
        <div class="breadcrumb_content style2">
            <h2 class="breadcrumb_title">Location Details</h2>
            <p class="h4">STAGE 2/5</p>
           
        </div>
    </div>
    <div class="col-lg-12">
       
        <div class="my_dashboard_review mt30">

            @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="alert alert-warning">{{$error}}</p>
            @endforeach
        @endif

           <form action="{{route('create_listing_step2')}}" method="post">
               @csrf
               <div class="row">
     
                <div class="col-lg-6 col-xl-6">
                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                        <label>Country</label>
                        <select class="selectpicker" data-live-search="true" name="country" data-width="100%">
                            <option data-tokens="Turkey">Nigeria</option>
                          
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    
                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                        <label>State</label>
                        <select class="selectpicker" data-live-search="true" name="state" data-width="100%">
                            <option value='{{$listing->state?? old('state')}}'>Abia</option>
                            <option value='Abia'>Abia</option>
                            <option value='Adamawa'>Adamawa</option>
                            <option value='AkwaIbom'>AkwaIbom</option>
                            <option value='Anambra'>Anambra</option>
                            <option value='Bauchi'>Bauchi</option>
                            <option value='Bayelsa'>Bayelsa</option>
                            <option value='Benue'>Benue</option>
                            <option value='Borno'>Borno</option>
                            <option value='Cross River'>Cross River</option>
                            <option value='Delta'>Delta</option>
                            <option value='Ebonyi'>Ebonyi</option>
                            <option value='Edo'>Edo</option>
                            <option value='Ekiti'>Ekiti</option>
                            <option value='Enugu'>Enugu</option>
                            <option value='F.C.T Abuja'>F.C.T Abuja</option>
                            <option value='Gombe'>Gombe</option>
                            <option value='Imo'>Imo</option>
                            <option value='Jigawa'>Jigawa</option>
                            <option value='Kaduna'>Kaduna</option>
                            <option value='Kano'>Kano</option>
                            <option value='Katsina'>Katsina</option>
                            <option value='Kebbi'>Kebbi</option>
                            <option value='Kogi'>Kogi</option>
                            <option value='Kwara'>Kwara</option>
                            <option value='Lagos'>Lagos</option>
                            <option value='Nasarawa'>Nasarawa</option>
                            <option value='Niger'>Niger</option>
                            <option value='Ogun'>Ogun</option>
                            <option value='Ondo'>Ondo</option>
                            <option value='Osun'>Osun</option>
                            <option value='Oyo'>Oyo</option>
                            <option value='Plateau'>Plateau</option>
                            <option value='Rivers'>Rivers</option>
                            <option value='Sokoto'>Sokoto</option>
                            <option value='Taraba'>Taraba</option>
                            <option value='Yobe'>Yobe</option>
                            <option value='Zamfara'>Zamafara</option>
                          
                        </select>
                    </div>
                </div>

                <div class="col-lg-12">
                
                    <div class="my_profile_setting_input form-group">
                        <label for="propertyAddress">Address</label>
                        <input type="text" name="address" value="{{$listing->address??old('address')}}" class="form-control" id="propertyAddress">
                    </div>
                </div>
    
           

                <div class="col-lg-6 col-xl-6">
                    <div class="my_profile_setting_input form-group">
                        <label for="googleMapLat">Latitude (for Google Maps)(Optional)</label>
                        <input type="text" name="latitude" value="{{$listing->latitude??old('latitude')}}" class="form-control" id="googleMapLat">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="my_profile_setting_input form-group">
                        <label for="googleMapLong">Longitude (for Google Maps)(Optional)</label>
                        <input type="text" name="longitude" value="{{$listing->longitude??old('longitude')}}" class="form-control" id="googleMapLong">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="my_profile_setting_input form-group">
                        <location-component></location-component>
                    </div>
                </div>

        
                <div class="col-xl-12">
                    <div class="my_profile_setting_input">
                        <a href="{{route('agents.create_listing')}}" class="btn btn1 float-left">Back</a>
                        <button type="submit" class="btn btn2 float-right">Next</button>
                    </div>
                </div>
            </div>
           </form>
        </div>
      
      
    </div>
</div>

@endsection

